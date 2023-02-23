<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profesor\IncidenciaController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('main');
});

Route::get('/',[HomeController::class,'index'])->name('main');
Route::get('aulas',[HomeController::class,'aulas'])->name('aulas');
Route::get('aulas/{aula}',[HomeController::class,'equipos'])->name('aulas.equipos');
Route::get('inventario',[HomeController::class,'inventario'])->name('inventario');
Route::get('aula/{equipo}',[IncidenciaController::class,'create'])->name('incidencias.create');
Route::post('aula',[IncidenciaController::class,'store'])->name('incidencias.store');
