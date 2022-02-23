<?php

use App\Http\Controllers\Api\PerfilPersonalidadController;
use \App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-questions', [PerfilPersonalidadController::class, 'index']);
Route::post('store-questions', [PerfilPersonalidadController::class, 'store']);

Route::post('send-email', [PerfilPersonalidadController::class, 'sendEmail']);

Route::get('get-users', [DashboardController::class, 'getUsers'])->name('api.get.users');
Route::get('get-user/{id}', [DashboardController::class, 'getUser'])->name('api.get.user');
