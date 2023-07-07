<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 

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

Route::post('/validarRegistro', [LoginController::class, 'Register']);
Route::post('/iniciaSesion', [LoginController::class, 'login'])->name('iniciaSesion');

Route::get('/logout', [LoginController::class, 'logout'])->name('cerrarSesion');
Route::get('/login', function(){return view('login');}); 
Route::get('/registrarse', function(){return view('register');});
Route::get('/', function(){return view ('inicio');});

