<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profesor\IncidenciaController;
use App\Http\Controllers\Profesor\InventarioController;

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
Route::resource('inventario',InventarioController::class)->names('inventario');
Route::get('aula/{equipo}',[IncidenciaController::class,'create'])->name('profesor.incidencias.create');
Route::post('aula',[IncidenciaController::class,'store'])->name('profesor.incidencias.store');
Route::get('logout',[LoginController::class,'logout'])->name('logout');