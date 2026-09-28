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
        Schema::create('etapa', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('clave', 10)->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->string('carpeta_fotos', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etapa');
    }
};
