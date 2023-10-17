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
        Schema::create('permiso', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->references('id')->on('usuario');
            $table->foreignId('id_cargo')->references('id')->on('cargo');
            $table->text('info_permiso');
            $table->time('hora_inicio')->nullable();
            $table->time('hora_fin')->nullable();
            $table->date('dias')->nullable();
            $table->text('remunerado')->nullable();
            $table->binary('firma_empleado')->nullable();
            $table->binary('firma_jefe')->nullable();
            $table->binary('firma_th')->nullable();
            $table->text('observaciones');
            $table->string('estado_solicitud', 200)->nullable();
            $table->string('p_c_l', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permiso');
    }
};
