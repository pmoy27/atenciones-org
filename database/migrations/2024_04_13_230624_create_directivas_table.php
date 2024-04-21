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
        Schema::create('directivas', function (Blueprint $table) {
            $table->id();
            $table->string('integrantes');
            $table->date('fecha_termino_directiva')->nullable();
            $table->char('estado');
            $table->date('fecha_cambio')->nullable();
            $table->unsignedBigInteger('id_vigencia');
            $table->foreign('id_vigencia')->references('id')->on('tipo_vigencias');
            $table->unsignedBigInteger('id_organizacion');
            $table->foreign('id_organizacion')->references('id')->on('organizacions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directivas');
    }
};
