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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_paciente');
            $table->dateTime('fech');
            $table->string('obser');
            $table->string('estado');
            $table->unsignedBigInteger('id_consul');
            $table->unsignedBigInteger('id_doc');
            $table->unsignedBigInteger('id_espe');



            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->foreign('id_consul')->references('id')->on('consultorios');
            $table->foreign('id_doc')->references('id')->on('doctores');
            $table->foreign('id_espe')->references('id')->on('especialidades');
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
