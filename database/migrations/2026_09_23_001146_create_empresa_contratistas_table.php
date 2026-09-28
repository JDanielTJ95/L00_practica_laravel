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
        Schema::create('empresa_contratista', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary();
            $table->string('clave', 10);
            $table->string('nombre', 200);
            $table->string('estatus', 1);
            $table->dateTime('date_added');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa_contratista');
    }
};
