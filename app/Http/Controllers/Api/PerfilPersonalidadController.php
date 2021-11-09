<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class PerfilPersonalidadController extends Controller
{
    public function index(){
        $preguntas = Group::select('id')
        ->with('characteristics:id,name,description')
        ->orderBy('order')
        ->get();
        return response()->json($preguntas);
    }
}
