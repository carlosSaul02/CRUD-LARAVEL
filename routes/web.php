<?php

use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\AprobacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});


//USUARIOS**************************************************
Route::get("/usuarios",[UsuarioController::class,"index"])->name('Usuarios.index');

Route::post("/usuarios/insertarUsuarios",[UsuarioController::class,"store"])->name("Usuarios.store");
Route::get('/usuarios/{editados}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{actualizados}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{eliminados}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');




//SOLICITUDES**************************************************
Route::get("/solicitudes",[SolicitudController::class,"index"])->name('Solicitudes.index');
Route::post("/solicitudes/insertarSolicitudes",[SolicitudController::class,"store"])->name("Solicitudes.store");

//APROBACION**************************************************
Route::get("/aprobacion",[AprobacionController::class,"index"])->name('Aprobacion.index');
Route::put('/aprobacion/{actualizados}', [SolicitudController::class, 'update'])->name('Solicitudes.update');


//EQUIPOS**************************************************
Route::get("/equipos",[EquipoController::class,"index"])->name('Equipos.index');

Route::post("/equipos/insertarEquipos",[EquipoController::class,"store"])->name("Equipos.store");
Route::get('/equipos/{editados}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::put('/equipos/{actualizados}', [EquipoController::class, 'update'])->name('equipos.update');
Route::delete('/equipos/{eliminados}', [EquipoController::class, 'destroy'])->name('equipos.destroy');


