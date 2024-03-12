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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->string('Nro_Sisco')->unique();
            $table->string('Tipo_Trabajo', 50);
            $table->text('Foto_Carta')->nullable();
            $table->integer('Puntos')->nullable();
            $table->datetime('Fecha_Hora_Inicio_Programado');
            $table->datetime('Fecha_Hora_Fin_Programado');
            $table->datetime('Fecha_Hora_Inicio')->nullable();
            $table->datetime('Fehca_Hora_Fin')->nullable();
            $table->string('Estado', 20)->nullable();
            $table->string('Observaciones', 200)->nullable();

            $table->unsignedBigInteger(column: 'Accesorios_id');
            $table->foreign(columns: 'Accesorios_id')->references(columns: 'id')
                ->on(table: 'accesorios')->onDelete(action: 'cascade');

            $table->unsignedBigInteger(column: 'Luminarias_id');
            $table->foreign(columns: 'Luminarias_id')->references(columns: 'id')
                ->on(table: 'luminarias')->onDelete(action: 'cascade');

            $table->unsignedBigInteger(column: 'Users_id');
            $table->foreign(columns: 'Users_id')->references(columns: 'id')
                ->on(table: 'users')->onDelete(action: 'cascade');

            $table->unsignedBigInteger(column: 'Distritos_id');
            $table->foreign(columns: 'Distritos_id')->references(columns: 'id')
                ->on(table: 'distritos')->onDelete(action: 'cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles');
    }
};
