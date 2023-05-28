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
Route::get('/paciente', [Paciente::class, 'paciente']);
Route::get('/fisio', [Fisioterapeutas::class, 'fisio']);
