<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pantalla', function () {
    return view('pantalla');
})->name('inicio')->middleware('auth');

Route::resource('pacientes', PacienteController::class)->middleware('auth');
Route::resource('clinicas', ClinicaController::class)->middleware('auth');
Route::resource('medicos', MedicoController::class)->middleware('auth');
Route::resource('horarios', HorarioController::class)->middleware('auth');
Route::resource('citas', CitaController::class)->middleware('auth');

// Rutas para reportes
Route::get('/reporte', [ReportController::class, /*'reportePac',*/ 'reporteCli', /*'reporteMed', 'reporteHor', 'reporteCit'*/]);