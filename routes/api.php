<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\MesaController;
use \App\Http\Controllers\PlatosController;
use \App\Http\Controllers\BebidasController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('usuarios','UserController');
Route::resource('roles','RolController');
Route::post('registrar',[AuthController::class,'registro']);
Route::post('login',[AuthController::class,'login']);
Route::post('usuario/{id}',[UserController::class,'show']);

Route::post('registrarplato',[PlatosController::class,'store']);
Route::get('platos',[PlatosController::class,'index']);
Route::get('detallesplato/{id}',[PlatosController::class,'show']);
Route::post('actualizarplato/{id}',[PlatosController::class,'update']);
Route::post('eliminarplato/{id}',[PlatosController::class,'destroy']);

Route::post('registrarbebida',[BebidasController::class,'store']);
Route::get('bebidas',[BebidasController::class,'index']);
Route::get('detallesbebida/{id}',[BebidasController::class,'show']);
Route::post('actualizarbebida/{id}',[BebidasController::class,'update']);
Route::post('eliminarbebida/{id}',[BebidasController::class,'destroy']);

Route::post('registrarmesa',[MesaController::class,'store']);
Route::get('mesas',[MesaController::class,'index']);
Route::get('detallesmesa/{id}',[MesaController::class,'show']);
Route::post('actualizarmesa/{id}',[MesaController::class,'update']);
Route::post('eliminarmesa/{id}',[MesaController::class,'destroy']);