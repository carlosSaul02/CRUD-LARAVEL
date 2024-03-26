<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="equipos";
    protected $fillable = [
        'serie_equipo',
        'etiqueta_inventario_equipo',
        'tipo_equipo',
        'marca_equipo',
        'modelo_equipo',
        'descripcion_equipo'
       
    ];
}
