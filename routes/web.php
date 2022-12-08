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

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/evento', App\Http\Controllers\EventoController::class);

Route::get('/evento-pdf/{id}', 'App\Http\Controllers\EventoController@createPDF')->name('eventos.pdf');

Route::resource('/cuenta-contable', App\Http\Controllers\CuentaContableController::class);

Route::get('/cuenta-contable-pdf/{id}', 'App\Http\Controllers\CuentaContableController@createPDF')->name('cuenta-contable.pdf');

Route::resource('/tipo-evento', App\Http\Controllers\TipoEventoController::class);

Route::get('/tipo-evento-pdf/{id}', 'App\Http\Controllers\TipoEventoController@createPDF')->name('tipo-evento.pdf');

Route::resource('/paf', App\Http\Controllers\PafController::class);

Route::get('/paf-pdf/{id}', 'App\Http\Controllers\PafController@createPDF')->name('paf.pdf');

Route::resource('/canales', App\Http\Controllers\CanaleController::class);

Route::get('/canales-pdf/{id}', 'App\Http\Controllers\CanaleController@createPDF')->name('canales.pdf');

Route::resource('/procesos', App\Http\Controllers\ProcesoController::class);

Route::get('/procesos-pdf/{id}', 'App\Http\Controllers\ProcesoController@createPDF')->name('procesos.pdf');

Route::resource('/operacion', App\Http\Controllers\OperacionController::class);

Route::get('/operacion-pdf/{id}', 'App\Http\Controllers\OperacionController@createPDF')->name('operacion.pdf');

Route::resource('/lugar', App\Http\Controllers\LugarController::class);

Route::get('/lugar-pdf/{id}', 'App\Http\Controllers\LugarController@createPDF')->name('lugar.pdf');

Route::resource('/linea-de-negocio', App\Http\Controllers\LineaDeNegocioController::class);

Route::get('/linea-de-negocio-pdf/{id}', 'App\Http\Controllers\LineaDeNegocioController@createPDF')->name('linea-de-negocio.pdf');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});
