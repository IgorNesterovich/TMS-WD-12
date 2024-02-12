<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Yaml;
use \App\Http\Controllers\HttpController;
use Carbon\Carbon;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CalculateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return "Добро пожаловать в Laravel!";
});

Route::get('/user/{id?}', function (?string $id = 'Пользователь анонимен') {
    return "Пользователь с ID: $id";
});

Route::get('/post/{slug?}', function () {
    return 'Верно';
})->where('slug', '^[a-z0-9-]+$');

Route::match(['GET', 'POST'], '/submit-contact-form', [HttpController::class, 'get']);

Route::get('/submit-contact-form/create', function () {
    return view('form');
});

Route::get('/greet/{name?}', function (string $name = null) {
    return view('greet', ['name' => $name]);
});

Route::get('/api/users', function () {
    $users = [
        ['id' => 1, 'name' => 'Igor', 'surname' => 'Nesterovich', 'age' => 24],
        ['id' => 2, 'name' => 'Maksim', 'surname' => 'Volkov', 'age' => 18],
        ['id' => 3, 'name' => 'Vlad', 'surname' => 'Malkovich', 'age' => 31]
    ];
    return response()->json($users);
});

Route::get('/time', function () {
    return response()->json(Carbon::now()->timezone('Europe/Minsk')->format('H:i:m Y-m-d'));
});

Route::redirect('/old-home', '/new-home');

Route::get('/new-home', function () {
    return 'Успешное перенаправление';
});

Route::get('/contact/create', [ContactController::class, 'create']);

Route::post('/contact', [ContactController::class, 'valid']);

Route::get('/calculate/{operation}/{number1}/{number2}', [CalculateController::class, 'show']);
