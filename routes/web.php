<?php

use App\Http\Controllers\TerceroController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('app');
});


Route::get('/formulario', [TerceroController::class, 'index'])->name('index.tercero');
Route::post('/formulario-natural', [TerceroController::class, 'addTerceroNatural'])->name('submit.natural');
Route::post('/formulario-juridica', [TerceroController::class, 'addTerceroJuridica'])->name('submit.juridica');

Route::get('/sedes/{idTercero}', [TerceroController::class, 'indexSede'])->name('sede.tercero');
Route::post('/sedes/{idTercero}', [TerceroController::class, 'addSede'])->name('add.sede');

Route::get('/consultar-tercero', [TerceroController::class, 'indexConsultar'])->name('index.consultar.tercero');
Route::post('/consultar-tercero/natural', [TerceroController::class, 'buscarTerceroNatural'])->name('buscar.natural');
Route::get('/consultar-tercero/natural/{numId}', [TerceroController::class, 'verTerceroNatural'])->name('ver.natural');
Route::post('/consultar-tercero/juridica', [TerceroController::class, 'buscarTerceroJuridica'])->name('buscar.juridica');
Route::get('/consultar-tercero/juridica/{nit}', [TerceroController::class, 'verTerceroJuridica'])->name('ver.juridica');

Route::post('/consultar-tercero/cambiar-estado', [TerceroController::class, 'cambiarEstadoTercero'])->name('cambiar.estado');
