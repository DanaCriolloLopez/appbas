<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\Paciente;
use App\Http\Controllers\Fisioterapeutas;

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

Route::get('/', [Inicio::class, 'inicio']);
Route::get('/cita', [Paciente::class, 'cita']);
Route::get('/edpa', [Paciente::class, 'editar']);
Route::get('/repa', [Paciente::class, 'registrar']);
Route::get('/regfisio', [Fisioterapeutas::class, 'registro_fisio']);
