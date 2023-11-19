<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\CitaController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('pacientes', PacienteController::class)->middleware('auth');
Route::resource('clinicas', UserController::class)->middleware('auth');
Route::resource('medicos', MedicoController::class)->middleware('auth');
Route::resource('horarios', HorarioController::class)->middleware('auth');
Route::resource('citas', CitaController::class)->middleware('auth');