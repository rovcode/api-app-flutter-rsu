<?php

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

 Route::get('/', function () {return view('auth.login');});
 Route::get('/registro', function () {return view('users.registro');});


// Route::get('/', function () {return view('welcome');});

Auth::routes();
Route::middleware('auth')->group(function () {
    // Route::get('/dashboard', function () {return view('users.dashboard');});
    // Route::get('/dashboard', [App\Http\Controllers\delifazil\appController::class, 'dashboard'])->name('dashboard');
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/dashboard',[App\Http\Controllers\PlanesController::class, 'index']);
    Route::get('/dashboard', 'RecetaController@index');
    Route::get('/home', 'RecetaController@index');
    Route::post('/suscription', "SuscriptionController@store");
    Route::get('/perfil', function () {return view('users.profile');});
    Route::get('/pedidos', function () {return view('users.pedidos');});
    Route::get('/suscripcion', function () {return view('users.suscription');});
    Route::get('/geolocation', function () {return view('users.geolocation');});
    Route::get('/ingredientes', function () {return view('users.listreceta');});
});