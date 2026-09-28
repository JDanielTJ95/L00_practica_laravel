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
        Schema::create('delegacion', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary();
            $table->string('clave', 50);
            $table->string('nombre', 200);
            $table->string('cp', 10);

            // Llave foránea que apunta a 'Id' en la tabla 'municipio'
            $table->integer('idMunicipio');
            $table->foreign('idMunicipio')->references('Id')->on('municipio')->onDelete('restrict');

            $table->string('estatus', 1);
            $table->dateTime('date_added');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delegacion');
    }
};
