<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Total de CVs enviados (todas las solicitudes)
        $totalCVs = Contacto::count();

        // Total de preguntas
        $totalPreguntas = Pregunta::count();

        // Solicitudes de este mes
        $inicioMes = Carbon::now()->startOfMonth();
        $finMes = Carbon::now()->endOfMonth();

        // Aceptados este mes
        $aceptadosMes = Contacto::where('estatus', 'aceptado')
            ->whereBetween('created_at', [$inicioMes, $finMes])
            ->count();

        // Rechazados este mes
        $rechazadosMes = Contacto::where('estatus', 'rechazado')
            ->whereBetween('created_at', [$inicioMes, $finMes])
            ->count();

        // Total de solicitudes procesadas este mes (aceptadas + rechazadas)
        $totalProcesadasMes = $aceptadosMes + $rechazadosMes;

        // Porcentaje de aceptación
        if ($totalProcesadasMes > 0) {
            $porcentajeAceptacion = round(($aceptadosMes / $totalProcesadasMes) * 100, 2);
        } else {
            $porcentajeAceptacion = 0;
        }

        return view('panel', compact(
            'totalCVs',
            'totalPreguntas',
            'aceptadosMes',
            'rechazadosMes',
            'porcentajeAceptacion'
        ));
    }
}
