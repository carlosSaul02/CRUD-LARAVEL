<?php

namespace App\Http\Controllers;
use App\Models\Equipo;

use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $datos=Equipo::all();
        return view('equipos',compact('datos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "serie_equipo"=>'required|max:20',
            "etiqueta_inventario_equipo"=>'required|max:20',
            "tipo_equipo"=>'required|max:20',
            "marca_equipo"=>'required|max:20',
            "modelo_equipo"=>'required|max:20',
            "descripcion_equipo"=>'required|max:100'
        ]);

            $usuario= new Equipo();
            $usuario->serie_equipo=$request->input('serie_equipo');
            $usuario->etiqueta_inventario_equipo=$request->input('etiqueta_inventario_equipo');
            $usuario->tipo_equipo=$request->input('tipo_equipo');
            $usuario->marca_equipo=$request->input('marca_equipo');
            $usuario->modelo_equipo=$request->input('modelo_equipo');
            $usuario->descripcion_equipo=$request->input('descripcion_equipo');
            $usuario->save();

        return redirect('/equipos')->with("exito","Los datos se han guardado correctamente");
    }

    public function edit(Equipo $editados){
        return view('edit_equipos', compact('editados'));
    }


    public function update(Request $request, Equipo $actualizados)
    {
        $request->validate([
            "serie_equipo"=>'required',
            "etiqueta_inventario_equipo"=>'required',
            "tipo_equipo"=>'required',
            "marca_equipo"=>'required',
            "modelo_equipo"=>'required',
            "descripcion_equipo"=>'required'
        ]);
       
        $actualizados->update([
            'serie_equipo' => $request->input('serie_equipo'),
            'etiqueta_inventario_equipo' => $request->input('etiqueta_inventario_equipo'),
            'tipo_equipo' => $request->input('tipo_equipo'),
            'marca_equipo' => $request->input('marca_equipo'),
            'modelo_equipo' => $request->input('modelo_equipo'),
            'descripcion_equipo' => $request->input('descripcion_equipo'),

        ]);

        return redirect()->route('Equipos.index')->with('exito', 'Equipo editado exitosamente.');
    }

    public function destroy(Equipo $eliminados){
        //SoftDelete del registro de la base de datos
        $eliminados->delete();
        return redirect()->route('Equipos.index')->with('exito', 'Equipo eliminado exitosamente.');
    }
}
