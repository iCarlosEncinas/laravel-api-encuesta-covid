<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::get('/prueba', function() {
    $respuesta = array();
    $respuesta["nombre"] = "Carlos";
    $respuesta["apellidos"] = "Encinas";
    return $respuesta;
});*/
use App\Http\Controllers\Api\RespuestasController;
use App\Http\Controllers\Api\TiposUsuarioController;
use App\Http\Controllers\Api\SintomasController;

Route::post('/respuestas', [RespuestasController::class, 'store'])->name('api.respuestas.store');
Route::get('/tipousuario', [TiposUsuarioController::class, 'index'])->name('api.tiposusuario.index');
Route::get('/sintomas', [SintomasController::class, 'index'])->name('api.sintomas.index');


//Route::get('/tipousuario', 'Api\TiposUsuarioController@index')->name('api.tiposusuario.index')
//Route::post('/respuestas', 'Api\RespuestasController@store')->name('api.respuestas.store');
