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
        Schema::create('contrato_empresa_contratista', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary();
            $table->string('contrato', 100)->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->string('no_poliza_cumplimiento', 100)->nullable();
            $table->string('no_poliza_civil', 100)->nullable();
            $table->string('nombre_representante', 200)->nullable();
            $table->string('nombre_residente_obra', 200)->nullable();
            $table->string('nombre_supervisor_obra', 200)->nullable();
            $table->string('telefono_representante', 50)->nullable();
            $table->string('telefono_residente_obra', 100)->nullable();
            $table->string('telefono_supervisor_obra', 50)->nullable();
            $table->string('estatus', 1)->nullable();

           // Clave foránea hacia la tabla delegacion
            $table->integer('idDelegacion')->nullable();
            $table->foreign('idDelegacion')->references('Id')->on('delegacion')->onDelete('cascade');

            $table->decimal('monto_contratado', 10, 2)->nullable();

           // Clave foránea hacia la tabla empresa_contratista
            $table->integer('idEmpresa')->nullable();
            $table->foreign('idEmpresa')->references('Id')->on('empresa_contratista')->onDelete('cascade');

            $table->dateTime('date_added')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrato_empresa_contratista');
    }
};
