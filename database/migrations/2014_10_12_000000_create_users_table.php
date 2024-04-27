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
            $table->string('Nombres', 50);
            $table->string('Paterno', 50);
            $table->string('Materno', 50)->nullable();
            $table->integer('Ci');
            $table->string('Expedido');
            $table->integer('Celular');
            $table->string('Genero', 10);
            $table->string('Cargo', 20);
            $table->string('Lugar_Designado', 25);
            $table->string('Estado', 20);
            $table->string('Usuario');
            $table->string('Password');

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
