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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('correo',50)->unique();
            $table->timestamp('verificar_correo'); /* Verifica, confirma y valida el email si luego toca recuperarla */
            $table->string('password');
            $table->string('cedula', 20);
            $table->rememberToken();/* Deja la sesión iniciada */
            $table->timestamps(); /* Created_at and Update_at */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
