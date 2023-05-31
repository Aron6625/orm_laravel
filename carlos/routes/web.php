<?php

use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Timer\Duration;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/login', function () {
    return view('login');
});

Route::get('/prestamos', function () {
    dump("hello");
    return view('prestamos');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/api/login', function (Request $request) {
    error_log("ESTAMOS AQUI>>>>>>");
    return "HELOOOO";
});
 
Route::get('/post/{id}', function ($request) {
    return "esto es ejemplo".$request;
});
 

Route::get('/users/{user}', [UserController::class, 'show']);
