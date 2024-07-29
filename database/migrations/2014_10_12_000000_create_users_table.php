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
            $table->string('name', 50);
            $table->string('Paterno', 50);
            $table->string('Materno', 50)->nullable();
            $table->integer('Ci');
            $table->string('Expedido');
            $table->integer('Celular');
            $table->string('Genero', 10);
            $table->string('Cargo', 20);
            $table->string('Lugar_Designado', 25);
            $table->string('Estado', 20);
            $table->string('perfil')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();

            $table->string('Password');

            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // resien incorporado para ver si funciona el login
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }

    /**
     * Reverse the migrations.
     */
};
