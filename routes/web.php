<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartidaController;

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
    return view('home');
});

Route::view('/inicio', 'inicio')->name('inicio');
Route::view('/crear-partida', 'crearPartida')->name('crearPartida');
Route::view('/unirse-a-una-partida', 'unirsePartida')->name('UnirsePartida');
Route::view('/partida', 'partidaActiva')->name('PartidaActiva');
Route::resource('/crearpartida', PartidaController::class);
