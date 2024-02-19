<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    $users = [
        ['id' => 1, 'name' => 'Igor', 'surname' => 'Nesterovich', 'age' => 24],
        ['id' => 2, 'name' => 'Maksim', 'surname' => 'Volkov', 'age' => 18],
        ['id' => 3, 'name' => 'Vlad', 'surname' => 'Malkovich', 'age' => 31]
    ];
    return response()->json($users);
});