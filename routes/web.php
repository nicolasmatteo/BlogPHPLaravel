<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\LoginController;

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
Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/privada', "secret")->name('privada');

Route::post('/validarRegistro', [LoginController::class, 'registrer'])->name('validarRegistro');
Route::post('/iniciaSesion', [LoginController::class, 'login'])->name('iniciaSesion');

Route::get('/logout', [LoginController::class, 'logout'])->name('logiut');
