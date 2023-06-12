<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\contraller_computadora;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\UserController;
use App\Models\estado;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/image', [UserController::class, 'images']);

Route::get('/prestamos', [PrestamoController::class, 'index']);

Route::post('/prestamos', [PrestamoController::class, 'create'])->name('prestamo');

Route::post('/computer', [ComputerController::class, 'register'])->name('computer');
// Rhoute::get('/activos', [ComputerController::class, 'activos']);

Route::get('/', function () {

    if(is_null(session('user_id'))) {
        return redirect('login');
    }

    $computaras = User::all();

    $interfaces = session('iterfaces');

    return view(
        'index',
        [
            'interface' => $interfaces,
            'compus' => $computaras,
        ]
    );
});

Route::get('/login', [UserController::class, 'index']);

Route::get('/logout', function () {
    session()->remove('user_id');
    session()->remove('interfaces');

    return redirect('login');
});

Route::get('/computer', function () {
    $estados = estado::all();
    return view('computer_register',["estados"=>$estados]);
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
