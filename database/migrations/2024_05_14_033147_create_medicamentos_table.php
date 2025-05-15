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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('codigo')->nullable();
            $table->string('descripcion');
            $table->decimal('precio');
            $table->dateTime('fecha_caducidad');
            $table->decimal('existencia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
