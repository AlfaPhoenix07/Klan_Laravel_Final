<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;

class PreguntaController extends Controller
{
     // Mostrar todas las preguntas en el panel admin
    public function index()
    {
        $preguntas = Pregunta::orderBy('created_at', 'desc')->get();
        return view('admin_preguntas', compact('preguntas'));
    }

    // Marcar como importante
    public function marcarImportante($id)
    {
        $pregunta = Pregunta::findOrFail($id);
        $pregunta->es_importante = 1;
        $pregunta->save();

        return redirect()->back()->with('success', 'Pregunta marcada como importante');
    }

    // Desmarcar como importante
    public function desmarcarImportante($id)
    {
        $pregunta = Pregunta::findOrFail($id);
        $pregunta->es_importante = 0;
        $pregunta->save();

        return redirect()->back()->with('success', 'Pregunta desmarcada');
    }

    // Eliminar pregunta
    public function destroy($id)
    {
        $pregunta = Pregunta::findOrFail($id);
        $pregunta->delete();

        return redirect()->back()->with('success', 'Pregunta eliminada');
    }

    // Mostrar preguntas frecuentes a los clientes (solo las importantes)
    public function preguntasFrecuentes()
    {
        $preguntasFrecuentes = Pregunta::where('es_importante', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('preguntas', compact('preguntasFrecuentes'));
    }
}
