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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('rut')->unique(); // Asumiendo que el rut debe ser único
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->date('fecha_nacimiento');
            $table->integer('edad')->nullable();
            $table->string('sector');
            $table->enum('sexo', ['MASCULINO', 'FEMENINO', 'Otro']);
            $table->unsignedBigInteger('id_organizacion')->nullable();
            $table->foreign('id_organizacion')->references('id')->on('organizacions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
