<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->string('cuenta_usuario');
            $table->string("nombre_usuario");
            $table->unsignedBigInteger('equipo_id');
            $table->string("tipo_equipo");
            $table->string("marca_equipo");
            $table->string("modelo_equipo");
            $table->datetime('fecha_solicitud');
            $table->string('estado_solicitud');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
