<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

// Página principal
Route::get('/', function () {
    return view('index');
});

// Páginas del sitio
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

Route::get('/preguntas', function () {
    return view('preguntas');
});

Route::post('/contacto', [FormularioController::class, 'guardarContacto'])->name('contacto.guardar');
Route::post('/pregunta', [FormularioController::class, 'guardarPregunta'])->name('pregunta.guardar');

