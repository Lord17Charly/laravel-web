<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('citas', function (Blueprint $table) {
        $table->id(); // ID único
        $table->string('mascota'); // Nombre de la mascota
        $table->string('servicio'); // Servicio solicitado
        $table->date('fecha'); // Fecha de la cita
        $table->time('hora'); // Hora de la cita
        $table->string('notas')->nullable(); // Notas adicionales
        $table->timestamps(); // created_at y updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
