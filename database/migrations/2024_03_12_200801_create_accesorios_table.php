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
        Schema::create('accesorios', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Item');
            $table->integer('Cantidad')->nullable();
            $table->integer('Utilizados')->nullable();
            $table->integer('Disponibles')->nullable();
            $table->string('Observaciones', 200)->nullable();

            $table->timestamps();

            $table->unsignedBigInteger(column: 'Proveedores_id');
            $table->foreign(columns: 'Proveedores_id')->references(columns: 'id')
                ->on(table: 'proveedores')->onDelete(action: 'cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accesorios');
    }
};
