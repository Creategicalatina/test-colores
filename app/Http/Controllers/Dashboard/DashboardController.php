<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Characteristic;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }

    public function getUsers()
    {
        $users = User::whereNotIn('Usuario')->with('test')->get();
        return response()->json($users);
//        return response()->json([$users, $test]);
    }

    public function getUser($id){
        $user = User::role('Usuario')->where('id', $id)->with('test')->first();
        $test = Test::testInf($user->test->id);
        $result = $test;

        return response()->json(['user' => $user, 'result' => $result]);
    }
}
