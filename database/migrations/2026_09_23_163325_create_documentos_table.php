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
        Schema::create('documentos', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary();
            $table->integer('ben_clave');
            $table->string('descripcion', 500)->nullable();
            $table->string('url', 500)->nullable();
            $table->string('observaciones', 500)->nullable();
            $table->string('estatus', 1);
            $table->dateTime('date_added');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
