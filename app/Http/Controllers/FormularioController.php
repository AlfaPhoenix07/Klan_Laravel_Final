<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Pregunta;

class FormularioController extends Controller
{
    // Guardar formulario de contacto
    public function guardarContacto(Request $request)
    {
        // Validar datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|max:255',
            'pdf' => 'nullable|file|mimes:pdf|max:5120', // máximo 5MB
        ]);

        // Guardar archivo PDF si existe
        $rutaPdf = null;
        if ($request->hasFile('pdf')) {
            $rutaPdf = $request->file('pdf')->store('pdfs', 'public');
        }

        // Crear registro en la base de datos
        Contacto::create([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'pdf' => $rutaPdf,
        ]);

        // Redirigir con mensaje de éxito
        return back()->with('success', 'Tu mensaje de contacto se envió correctamente.');
    }

    // Guardar formulario de preguntas
    public function guardarPregunta(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'pregunta' => 'required|string',
        ]);

        Pregunta::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'pregunta' => $request->pregunta,
        ]);

        return back()->with('success', 'Tu pregunta se envió correctamente.');
    }
}
