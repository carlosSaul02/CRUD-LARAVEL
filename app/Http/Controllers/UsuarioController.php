<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $datos=Usuario::all();
        return view('usuarios',compact('datos'));
    }



    public function store(Request $request){
        $request->validate([
            "nombre_usuario"=>'required|max:20',
            "apellido_usuario"=>'required|max:20',
            "telefono_usuario"=>'required|max:10',
            "email_usuario"=>'required|email',
            "cuenta_usuario"=>'required|max:13|min:13',
            "edad_usuario"=>'required|digits:2',
            "genero_usuario"=>'required|max:2',
            "usuario_usuario"=>'required|max:20',
            "contrasena_usuario"=>'required|max:20',
            "tipo_usuario"=>'required|max:20'
        ]);

            $usuario= new Usuario();
            $usuario->nombre_usuario=$request->input('nombre_usuario');
            $usuario->apellido_usuario=$request->input('apellido_usuario');
            $usuario->telefono_usuario=$request->input('telefono_usuario');
            $usuario->email_usuario=$request->input('email_usuario');
            $usuario->cuenta_usuario=$request->input('cuenta_usuario');
            $usuario->edad_usuario=$request->input('edad_usuario');
            $usuario->genero_usuario=$request->input('genero_usuario');
            $usuario->usuario_usuario=$request->input('usuario_usuario');
            $usuario->contrasena_usuario=$request->input('contrasena_usuario');
            $usuario->tipo_usuario=$request->input('tipo_usuario');
            $usuario->save();

        return redirect('/usuarios')->with("exito","Los datos se han guardado correctamente");
    }

    public function edit(Usuario $editados){
        return view('edit_usuarios', compact('editados'));
    }

    public function update(Request $request, Usuario $actualizados)
    {
        $request->validate([
            "nombre_usuario"=>'required',
            "apellido_usuario"=>'required',
            "telefono_usuario"=>'required|max:10',
            "email_usuario"=>'required|email',
            "cuenta_usuario"=>'required|max:13|min:13',
            "edad_usuario"=>'required|digits:2',
            "genero_usuario"=>'required|max:2',
            "usuario_usuario"=>'required',
            "contrasena_usuario"=>'required',
            "tipo_usuario"=>'required'
        ]);
       
        $actualizados->update([
            'nombre_usuario' => $request->input('nombre_usuario'),
            'apellido_usuario' => $request->input('apellido_usuario'),
            'telefono_usuario' => $request->input('telefono_usuario'),
            'email_usuario' => $request->input('email_usuario'),
            'cuenta_usuario' => $request->input('cuenta_usuario'),
            'edad_usuario' => $request->input('edad_usuario'),
            'genero_usuario' => $request->input('genero_usuario'),
            'usuario_usuario' => $request->input('usuario_usuario'),
            'contrasena_usuario' => $request->input('contrasena_usuario'),
            'tipo_usuario' => $request->input('tipo_usuario'),

        ]);

        return redirect()->route('Usuarios.index')->with('exito', 'Usuario editado exitosamente.');
    }

    public function destroy(Usuario $eliminados){
        //SoftDelete del registro de la base de datos
        $eliminados->delete();
        return redirect()->route('Usuarios.index')->with('exito', 'Usuario eliminado exitosamente.');
    }
}
