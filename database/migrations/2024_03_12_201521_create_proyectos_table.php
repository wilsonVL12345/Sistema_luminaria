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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('Cuce_Cod')->unique();
            $table->string('Tipo_Contratacion', 200)->nullable();
            $table->text('Estado')->nullable();
            $table->string('Subasta', 200)->nullable();
            $table->datetime('Modalidad')->nullable();
            $table->datetime('Objeto_Contratacion')->nullable();
            $table->datetime('Tipo_Componentes')->nullable();
            $table->datetime('Ejecutado_Por')->nullable();
            $table->datetime('Fecha_Hora_Inicio_Programado')->nullable();
            $table->datetime('Fecha_Hora_Fin_Programado')->nullable();
            $table->datetime('Fecha_Hora_Inicio')->nullable();
            $table->datetime('Fecha_Hora_Fin')->nullable();
            $table->text('Observaciones')->nullable();

            $table->unsignedBigInteger(column: 'Accesorios_id');
            $table->foreign(columns: 'Accesorios_id')->references(columns: 'id')
                ->on(table: 'accesorios');

            $table->unsignedBigInteger(column: 'Luminarias_id');
            $table->foreign(columns: 'Luminarias_id')->references(columns: 'id')
                ->on(table: 'luminarias');

            $table->unsignedBigInteger(column: 'Luminarias_Reutilizadas_id');
            $table->foreign(columns: 'Luminarias_Reutilizadas_id')->references(columns: 'id')
                ->on(table: 'luminarias_reutilizadas');


            $table->unsignedBigInteger(column: 'Users_id');
            $table->foreign(columns: 'Users_id')->references(columns: 'id')
                ->on(table: 'users');

            $table->unsignedBigInteger(column: 'Distritos_id');
            $table->foreign(columns: 'Distritos_id')->references(columns: 'id')
                ->on(table: 'distritos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
