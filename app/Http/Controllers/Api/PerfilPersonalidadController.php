<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SendTestResult;
use App\Models\AnswerTest;
use App\Models\Characteristic;
use App\Models\Group;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PerfilPersonalidadController extends Controller
{
    public function index()
    {
        $preguntas = Group::selectRaw('id, 0 as selected')
            ->with(['characteristics' => function ($q) {
                $q->select('characteristics.id', 'name', 'description')
                    ->orderBy('pivot_order', 'asc');
            }])
            ->orderBy('order')
            ->get();
        return response()->json($preguntas);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = User::select('id')->where('email', $request->email)->first();
            if (!$user) {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = '$2y$10$iLohY36S1kKyAb8YwMzwGO3yOevBFh7kCowrAZvu8z.9.cqaIqiMy'; //&zaQU&Xw&Q!#DvRyS@45gpS1q9DEhE
                $user->save();
            }

            $test = new Test();
            $test->user_id = $user->id;
            $test->save();

            $respuestas = collect($request->respuestas);

            $respuestas = $respuestas->map(function ($respuesta) use ($test) {
                $answer = new AnswerTest();
                $answer->test_id = $test->id;
                $answer->characteristic_id = $respuesta;
                $answer->save();
                return $answer;
            });
            DB::commit();
            return response()->json(['url' => route('test.results', [$test->id])], 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(
                ['msg' => $th->getMessage(), "trace" => $th->getTrace()],
                501
            );
        }
    }

    public function showResultados($id)
    {
        $test = Test::findOrFail($id);
        $answers = Characteristic::selectRaw('count(type) as total, type')->groupBy('type')->whereHas('answerTest', function ($answerTest) use ($id) {
            return $answerTest->where('test_id', $id);
        })->get();

        $total = 0;
        $red = 0;
        $yellow = 0;
        $blue = 0;
        $green = 0;

        foreach ($answers as $answer) {
            switch ($answer->type) {
                case Characteristic::SANGUINEO;
                    $red = $answer->total;
                    break;
                case Characteristic::FLEMATICO;
                    $blue = $answer->total;
                    break;
                case Characteristic::COLERICO;
                    $yellow = $answer->total;
                    break;
                case Characteristic::MELANCOLICO;
                    $green = $answer->total;
                    break;
            }

            $total += $answer->total;
        }

        $red = ($red / $total) * 100;
        $blue = ($blue / $total) * 100;
        $green = ($green / $total) * 100;
        $yellow = ($yellow / $total) * 100;

        $send_email = $test->send_email;

        return view('resultados', compact('red', 'blue', 'green', 'yellow', 'id', 'send_email'));
    }

    public function sendEmail(Request $request)
    {
        $id = $request->input('id');
        $red = $request->input('red');
        $blue = $request->input('blue');
        $yellow = $request->input('yellow');
        $green = $request->input('green');
        $img = $request->input('img');

        $test = Test::findOrFail($id);
        $user = User::find($test->user_id);

        @list($type, $file_data) = explode(';', $img);
        @list(, $file_data) = explode(',', $file_data);
        $imageName = Str::random() . '.png';
        $path = '/results/' . $imageName;
        $finalPath = storage_path('app/public/' . $path);
        Storage::disk('public')->put($path, base64_decode($file_data));

        try {
            if (!$test->send_email) {
                Mail::to($user->email)->send(new SendTestResult(
                    $user->email,
                    $user->name,
                    $finalPath,
                    $red,
                    $blue,
                    $yellow,
                    $green,
                ));

                $test->send_email = true;
                $test->path_img = $path;
                $test->save();
            }
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 501);
        }
        return response()->json();
    }
}
