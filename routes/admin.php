<?php

use App\Http\Controllers\Admin\AlumnoController;
use App\Http\Controllers\Admin\AulaController;
use App\Http\Controllers\Admin\EquipoController;
use App\Http\Controllers\Admin\GrupoController;
use App\Http\Controllers\Admin\IncidenciaController;
use App\Http\Controllers\Admin\PerifericoController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('',[UserController::class,'index'])->middleware('can:admin')->name('admin');
Route::resource('users',UserController::class)->names('profesores');
Route::resource('alumnos',AlumnoController::class)->names('alumnos');
Route::resource('aulas',AulaController::class)->names('aulas');
Route::resource('equipos',EquipoController::class)->names('equipos');
Route::resource('perifericos',PerifericoController::class)->names('perifericos');
Route::resource('grupos',GrupoController::class)->names('grupos');
Route::resource('incidencias',IncidenciaController::class)->names('incidencias');

