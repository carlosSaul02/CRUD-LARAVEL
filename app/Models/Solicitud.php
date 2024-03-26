<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solicitud extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="solicitudes";
    protected $fillable = [
        'usuario_id',
        'cuenta_usuario',
        'nombre_usuario',
        'equipo_id',
        'tipo_equipo',
        'marca_equipo',
        'modelo_equipo',
        'fecha_solicitud',
        'estado_solicitud',
    ];
}
