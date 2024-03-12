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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id'); // Columna autoincrementable y clave primaria
            $table->string('Nombres', 255)->nullable();
            $table->string('Paterno', 255)->nullable();
            $table->string('Materno', 255)->nullable();
            $table->integer('Ci')->nullable();
            $table->string('Expedido')->nullable();
            $table->integer('Celular')->nullable();
            $table->string('Genero', 10)->nullable();
            $table->string('Lugar_Designado', 25)->nullable();
            $table->string('Usuario', 15)->nullable();
            $table->string('Contraseña', 255)->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
