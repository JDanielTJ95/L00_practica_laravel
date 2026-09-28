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
        Schema::create('presupuesto', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary();
            $table->string('presupuesto', 100)->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->string('no_poliza_cumplimiento', 100)->nullable();
            $table->string('no_poliza_civil', 100)->nullable();
            $table->string('nombre_representante', 200)->nullable();
            $table->string('nombre_residente_obra', 200)->nullable();
            $table->string('telefono_representante', 50);
            $table->string('telefono_residente_obra', 100)->nullable();
            $table->string('estatus', 1)->nullable();

            // Llave foránea hacia 'delegacion'
            $table->integer('idDelegacion')->nullable();
            $table->foreign('idDelegacion')->references('Id')->on('delegacion')->onDelete('restrict');

            $table->decimal('monto', 10, 2)->nullable();

            // Llave foránea hacia 'empresa_contratista'
            $table->integer('idEmpresa')->nullable();
            $table->foreign('idEmpresa')->references('Id')->on('empresa_contratista')->onDelete('restrict');

            $table->dateTime('date_added');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presupuesto');
    }
    
};
