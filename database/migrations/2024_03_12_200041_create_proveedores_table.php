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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_de_Empresa', 100)->unique();
            $table->text('Descripcion')->nullable();
            $table->string('Cod_Proyecto', 50)->nullable()->unique();
            $table->string('Tipo_de_Componentes', 100)->nullable();
            $table->date('Fecha_de_proyecto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
