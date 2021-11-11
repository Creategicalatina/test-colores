<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AnswerTest;
use App\Models\Characteristic;
use App\Models\Group;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        Test::findOrFail($id);
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

        $red = ($red / $total)*100;
        $blue = ($blue / $total)*100;
        $green = ($green / $total)*100;
        $yellow = ($yellow / $total)*100;

        return view('resultados', compact('red', 'blue', 'green', 'yellow'));
    }
}
