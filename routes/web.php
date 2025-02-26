<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;


Route::get('/', function () {
    return view('inicio');
}); 
Route::get('alumno', function () {
    return view('alumno');
}); 
Route::get('curso', function () {
    return view('curso');
}); 
Route::get('categoria', function () {
    return view('categoria');
}); 
Route::get('pestana', function () {
    return view('pestana');
}); 
Route::get('contacto', function () {
    return view('contacto');
}); 


Route::get('cursos', [cursocontroller::class, 'index']);
Route::get('cursosAgregar', [cursocontroller::class, 'agregar']);
Route::post('cursosGuardar', [cursocontroller::class, 'guardar']);
Route::post('cursosEliminar/{id}', [CursoController::class, 'eliminar'])->name('cursosEliminar');
Route::get('cursosVer/{id}', [cursocontroller::class, 'ver']);
