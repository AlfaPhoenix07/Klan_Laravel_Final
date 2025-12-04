<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Mail\SolicitudAceptada;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    // Mostrar lista
    public function index()
    {
        $solicitudes = Contacto::orderBy('nombre', 'desc')->get();
        return view('solicitudes', compact('solicitudes'));
    }

    // Aceptar solicitud
    public function aceptar($id)
    {
        $solicitud = Contacto::findOrFail($id);
        $solicitud->estatus = 'aceptado';
        $solicitud->save();

         Mail::to($solicitud->correo)->send(new SolicitudAceptada($solicitud));

        return redirect()->back();
    }

    // Rechazar solicitud
    public function rechazar($id)
    {
        $solicitud = Contacto::findOrFail($id);
        $solicitud->estatus = 'rechazado';
        $solicitud->save();

        return redirect()->back();
    }

    //Destruir registro de candidato
    public function destroy($id)
    {
        $solicitud = Contacto::findOrFail($id);

        //Eliminar pdf fisico
        if ($solicitud->pdf && \Storage::disk('public')->exists($solicitud->pdf)) {
            \Storage::disk('public')->delete($solicitud->pdf);
        }

        $solicitud->delete();

        return redirect()->back()->with('success', 'Candidato eliminado correctamente.');
    }

}
