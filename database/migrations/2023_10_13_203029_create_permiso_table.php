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
            $table->text('info_permiso')->nullable();
            $table->text('fecha_solicitud')->nullable();
            $table->string('hora_inicio')->nullable();
            $table->string('hora_fin')->nullable();
            $table->text('dia_inicio')->nullable();
            $table->text('dia_fin')->nullable();
            $table->text('remunerado')->nullable();
            $table->string('firma_empleado')->nullable();
            $table->string('firma_jefe')->nullable();
            $table->string('firma_th')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('estado_solicitud', 200)->nullable();
            $table->string('p_c_l', 200)->nullable();
            $table->timestamps();
            $table->string('collector');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
