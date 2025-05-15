<?php

use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\ConsultoriosController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\HelloControler;
use App\Models\Especialidad;
use App\Models\Consultorio;
use App\Models\Paciente;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', [HelloControler::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('especialidad/nueva',[EspecialidadController::class,'index'])->name('nueva.especialidad');
Route::get('especialidades',[EspecialidadController::class,'list'])->name('especialidades');
Route::post('especialidad/guardar',[EspecialidadController::class,'save'])->name('guardar.especialidad');
Route::post('especialidad/borrar',[EspecialidadController::class,'delete'])->name('borrar.especialidad');

Route::get('consultorio/nueva',[ConsultoriosController::class,'index'])->name('nueva.consultorio');
Route::get('consultorios',[ConsultoriosController::class,'list'])->name('consultorios');
Route::post('consultorio/guardar',[ConsultoriosController::class,'save'])->name('guardar.consultorio');
Route::post('consultorio/borrar',[ConsultoriosController::class,'delete'])->name('borrar.consultorio');

Route::get('paciente/nueva',[PacienteController::class,'index'])->name('nueva.paciente');
Route::get('pacientes',[PacienteController::class,'list'])->name('pacientes');
Route::post('paciente/guardar',[PacienteController::class,'save'])->name('guardar.paciente');
Route::post('paciente/borrar',[PacienteController::class,'delete'])->name('borrar.paciente');