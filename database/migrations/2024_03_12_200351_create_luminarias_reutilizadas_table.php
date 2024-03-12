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
        Schema::create('luminarias_reutilizadas', function (Blueprint $table) {
            $table->bigIncrements('id'); // Columna autoincrementable y clave primaria
            $table->string('Nombre', 50)->nullable();
            $table->integer('Cantidad')->nullable();
            $table->string('Potencia', 10)->nullable();
            $table->integer('Utilizados')->nullable();
            $table->integer('Disponibles')->nullable();
            $table->string('Observaciones', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('luminarias_reutilizadas');
    }
};
