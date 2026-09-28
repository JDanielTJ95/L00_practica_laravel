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
        Schema::create('orden_trabajo', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary();
            $table->date('fecha')->nullable();
            $table->string('folio', 10)->nullable();
            $table->string('orden_trabajo', 100)->nullable();
            $table->string('oficio', 100)->nullable();
            $table->string('remitente', 500)->nullable();
            $table->longText('asunto')->nullable();
            $table->string('tipo_solicitud', 500)->nullable();
            $table->string('latitud_calle', 50)->nullable();
            $table->string('longitud_calle', 50)->nullable();
            $table->string('latitud_delegacion', 50)->nullable();
            $table->string('longitud_delegacion', 50)->nullable();
            $table->string('calle', 500)->nullable();
            $table->string('colonia', 500)->nullable();

            // Clave foránea hacia la tabla delegacion
            $table->integer('idDelegacion')->nullable();
            $table->foreign('idDelegacion')->references('Id')->on('delegacion')->onDelete('cascade');

            $table->string('turnadoa', 500)->nullable();
            $table->string('respuesta', 500)->nullable();
            $table->string('estatus', 50)->nullable();
            $table->string('archivo_recibido', 100)->nullable();
            $table->string('archivo_respuesta', 100)->nullable();

            // Clave foránea hacia la tabla usuario
            $table->integer('idUsuarioAlta')->nullable();
            $table->foreign('idUsuarioAlta')->references('user_id')->on('users')->onDelete('cascade');

            $table->dateTime('date_added')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_trabajo');
    }
};
