<?php

use App\Http\Controllers\Admin\ProfesorController;
use Illuminate\Support\Facades\Route;


Route::get('',[ProfesorController::class,'index'])->name('admin');

Route::resource('profesores', ProfesorController::class)->names('profesores');

// Route::get('/profesores',[HomeController::class,'profesores'])->name('profesores');
// Route::get('/profesores/agregar',[HomeController::class,'profesores_agregar'])->name('profesores_agregar');
// Route::get('/profesores/{profesor}/editar',[HomeController::class,'profesores_editar'])->name('profesores_editar');
// Route::get('/profesores/{profesor}/store',[HomeController::class,'profesores_store'])->name('profesores_store');
// Route::get('/profesores/borrar',[HomeController::class,'profesores_borrar'])->name('profesores_borrar');
