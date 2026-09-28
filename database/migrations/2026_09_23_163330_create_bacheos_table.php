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
        Schema::create('bacheo', function (Blueprint $table) {
            $table->bigInteger('Id')->autoIncrement()->primary();

            // Relaciones y Referencias
            $table->integer('idEmpresa')->nullable();
            $table->foreign('idEmpresa')->references('Id')->on('empresa_contratista')->onDelete('cascade');

            $table->integer('idResponsable')->nullable();
            $table->foreign('idResponsable')->references('Id')->on('responsable_contratista')->onDelete('cascade');
            
            $table->integer('idDocRef')->nullable();
            $table->foreign('idDocRef')->references('Id')->on('documentos')->onDelete('cascade');

            $table->string('tipoDocRef', 50)->nullable();
            $table->string('folioRef', 50)->nullable();
            
            $table->integer('idBacheo');

            $table->integer('idDelegacion');
            $table->foreign('idDelegacion')->references('Id')->on('delegacion')->onDelete('cascade');

            // Información General
            $table->string('fecha', 50)->nullable();
            $table->string('estatus', 1)->nullable();
            $table->string('folio', 50)->nullable();

            // Coordenadas
            $table->string('latitude', 50)->nullable(); 
            $table->string('longitude', 50)->nullable();
            $table->string('latitude_app', 50)->nullable();
            $table->string('longitude_app', 50)->nullable();

            // Dirección
            $table->string('calle', 150)->nullable(); 
            $table->string('cp', 10)->nullable(); 
            $table->string('calleComplemento', 150)->nullable(); 
            $table->string('entreCalle1', 150)->nullable(); 
            $table->string('entreCalle2', 150)->nullable(); 
            $table->string('delegacion', 500)->nullable(); 
            $table->string('colonia', 150)->nullable(); 

            // Dimensiones y Mediciones
            $table->string('tipo', 50)->nullable();
            $table->string('largo', 50)->nullable();
            $table->string('ancho', 50)->nullable();
            $table->string('profundidad', 50)->nullable();
            $table->float('m2total', 8, 2)->nullable();
            $table->float('m2rastreo', 8, 2)->nullable();
            $table->float('m2revestimiento', 8, 2)->nullable();
            $table->float('m3relleno', 8, 2)->nullable();

            // Evidencia Fotográfica (Inicio)
            $table->longText('fotoBache1')->nullable();
            $table->longText('fotoBache2')->nullable();
            $table->longText('fotoBache3')->nullable();

            // Evidencia Fotográfica (Proceso)
            $table->longText('fotoBacheProceso1')->nullable();
            $table->longText('fotoBacheProceso2')->nullable();
            $table->longText('fotoBacheProceso3')->nullable();
            $table->longText('fotoBacheProceso4')->nullable();
            $table->longText('fotoBacheProceso5')->nullable();

            // Evidencia Fotográfica (Terminado)
            $table->longText('fotoBacheTerminado1')->nullable();
            $table->longText('fotoBacheTerminado2')->nullable();
            $table->longText('fotoBacheTerminado3')->nullable();

            // Etapa y Fechas de Auditoría
            $table->integer('idEtapa')->nullable();
            $table->foreign('idEtapa')->references('Id')->on('etapa')->onDelete('restrict');

            $table->dateTime('date_added')->useCurrent();
            $table->dateTime('date_added_proceso')->nullable();
            $table->dateTime('date_added_termino')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bacheo');
    }
};
