<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class AprobacionController extends Controller
{
    public function index()
    {
        $datos=Solicitud::all();
        return view('aprobacion',compact('datos'));
    }
}
