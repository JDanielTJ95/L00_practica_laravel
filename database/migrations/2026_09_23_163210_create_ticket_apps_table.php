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
        Schema::create('ticket_app', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary();
            $table->string('folio', 10)->nullable();
            $table->string('estatus', 100)->nullable();
            $table->string('solicitante', 500)->nullable();
            $table->string('solicitud', 500)->nullable();
            $table->string('comentarios', 500)->nullable();
            $table->string('material', 500)->nullable();
            $table->string('recibido', 500)->nullable();
            $table->string('actualizado', 500)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->longText('observaciones')->nullable();
            $table->string('calle', 500)->nullable();
            $table->string('calle_verificada', 500)->nullable();
            $table->string('entre_calle1', 500)->nullable();
            $table->string('entre_calle2', 500)->nullable();
            $table->string('latitud', 50)->nullable();
            $table->string('longitud', 50)->nullable();
            $table->string('colonia', 100)->nullable();

            $table->integer('idDelegacion')->nullable();
            $table->foreign('idDelegacion')->references('Id')->on('delegacion')->onDelete('cascade');

            $table->string('estatus_trabajo', 100)->nullable();
            $table->string('fecha_visita', 100)->nullable();
            $table->string('notas', 500)->nullable();
            $table->string('evidencia', 1000)->nullable();

            $table->integer('idUsuarioAlta');
            $table->foreign('idUsuarioAlta')->references('user_id')->on('users')->onDelete('cascade');

            $table->string('frente_trabajo', 500)->nullable();
            $table->dateTime('date_added')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_app');
    }
};
