<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;
    USE SoftDeletes;
    protected $table="Usuarios"; //especifica el nombre de la tabla
    protected $fillable = [
        'nombre_usuario',
        'apellido_usuario',
        'telefono_usuario',
        'email_usuario',
        'cuenta_usuario',
        'edad_usuario',
        'genero_usuario',
        'usuario_usuario',
        'contrasena_usuario',
        'tipo_usuario'
    ];
}
