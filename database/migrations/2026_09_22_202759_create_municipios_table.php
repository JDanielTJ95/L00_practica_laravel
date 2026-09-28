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
        Schema::create('municipio', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary(); // INT PK
            $table->string('clave', 50);
            $table->string('nombre', 200);
            
            // Llave foránea que apunta a 'Id' en la tabla 'estado'
            $table->integer('idEstado');
            $table->foreign('idEstado')->references('Id')->on('estado')->onDelete('cascade');
            
            $table->dateTime('date_added');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipio');
    }
};
