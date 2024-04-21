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
        Schema::create('organizacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('rut')->nullable();
            $table->integer('rol_municipal')->nullable();
            $table->date('fecha_concesion')->nullable();
            $table->integer('n_inscripcion_RC')->nullable();
            $table->string('lugar_funcionamiento')->nullable();
            $table->date('estatuto')->nullable();
            $table->unsignedBigInteger('id_tipo')->nullable();
            $table->foreign('id_tipo')->references('id')->on('tipo_organicacions');
            $table->unsignedBigInteger('id_vigencia')->nullable();
            $table->foreign('id_vigencia')->references('id')->on('tipo_vigencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizacions');
    }
};
