<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Equipo;
use App\Models\Solicitud;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        $equipos = Equipo::all();
        $solicitudes = Solicitud::all();
        return view('solicitudes', compact('usuarios', 'equipos', 'solicitudes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "usuario_id" => 'required',
            "cuenta_usuario" => 'required|max:13|min:13',
            "nombre_usuario" => 'required|max:20',
            "equipo_id" => 'required',
            "tipo_equipo" => 'required|max:20',
            "marca_equipo" => 'required|max:20',
            "modelo_equipo" => 'required|max:20',
            "fecha_solicitud" => 'required',
            "estado_solicitud" => 'required|max:20',

        ]);

        $solicitudes = new Solicitud();
        $solicitudes->usuario_id = $request->input('usuario_id');
        $solicitudes->cuenta_usuario = $request->input('cuenta_usuario');
        $solicitudes->nombre_usuario = $request->input('nombre_usuario');
        $solicitudes->equipo_id = $request->input('equipo_id');
        $solicitudes->tipo_equipo = $request->input('tipo_equipo');
        $solicitudes->marca_equipo = $request->input('marca_equipo');
        $solicitudes->modelo_equipo = $request->input('modelo_equipo');
        $solicitudes->fecha_solicitud = $request->input('fecha_solicitud');
        $solicitudes->estado_solicitud = $request->input('estado_solicitud');
        $solicitudes->save();

        return redirect('/solicitudes')->with("exito", "La solicitud se ha enviado correctamente");
    }

    public function update(Request $request, Solicitud $actualizados)
    {
        $request->validate([
            "estado_solicitud" => 'required|max:20',
        ]);
       
        $actualizados->update([
            'estado_solicitud' => $request->input('estado_solicitud'),
        ]);

        return redirect()->route('Aprobacion.index')->with('exito', 'Solicitud aprobada exitosamente.');
    }
}
