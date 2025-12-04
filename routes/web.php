<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PreguntaController;

// Página principal
Route::get('/', function () {
    return view('index');
});

// Páginas del sitio
Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

// Mostrar solicitudes
Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitudes');

// Aceptar soli
Route::get('/solicitudes/aceptar/{id}', [SolicitudController::class, 'aceptar'])->name('solicitudes.aceptar');

// Rechazar soli
Route::get('/solicitudes/rechazar/{id}', [SolicitudController::class, 'rechazar'])->name('solicitudes.rechazar');

// Eliminar (destruir)
Route::delete('/solicitudes/{id}', [SolicitudController::class, 'destroy'])->name('solicitudes.destroy');

// Rutas de Panel de Preguntas
Route::get('/admin/preguntas', [PreguntaController::class, 'index'])->name('admin.preguntas');
Route::get('/admin/preguntas/importante/{id}', [PreguntaController::class, 'marcarImportante'])->name('preguntas.importante');
Route::get('/admin/preguntas/no-importante/{id}', [PreguntaController::class, 'desmarcarImportante'])->name('preguntas.no-importante');
Route::delete('/admin/preguntas/{id}', [PreguntaController::class, 'destroy'])->name('preguntas.destroy');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/planes', function () {
    return view('planes');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/preguntas', [PreguntaController::class, 'preguntasFrecuentes'])->name('preguntas.frecuentes');

Route::post('/contacto', [FormularioController::class, 'guardarContacto'])->name('contacto.guardar');
Route::post('/pregunta', [FormularioController::class, 'guardarPregunta'])->name('pregunta.guardar');

