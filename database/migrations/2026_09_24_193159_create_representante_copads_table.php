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
        Schema::create('representante_copad', function (Blueprint $table) {
            $table->bigInteger('Id')->autoIncrement()->primary();
            $table->string('clave', 50);
            $table->string('nombre', 150);
            $table->string('usuario_app', 50);
            $table->string('contrasenia_app', 50);
            $table->string('estatus', 1);
            $table->dateTime('date_added')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representante_copad');
    }
};
