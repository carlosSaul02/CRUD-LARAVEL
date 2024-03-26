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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("nombre_usuario");
            $table->string("apellido_usuario");
            $table->integer("telefono_usuario");
            $table->string("email_usuario");
            $table->string("cuenta_usuario");
            $table->integer("edad_usuario");
            $table->string("genero_usuario");
            $table->string("usuario_usuario");
            $table->string("contrasena_usuario");
            $table->string("tipo_usuario");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
