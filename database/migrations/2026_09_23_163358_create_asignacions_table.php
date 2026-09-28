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
        Schema::create('asignacion', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement()->primary();
            $table->string('tipo_doc_ref', 10);
            
            $table->integer('id_doc_ref');
            // $table->foreign('id_doc_ref')->references('Id')->on('documentos')->onDelete('cascade');

            $table->string('tipo_asignacion', 10);
            $table->integer('id_asignacion');
            $table->string('estatus', 1);

            $table->integer('idEtapa')->nullable();
            $table->foreign('idEtapa')->references('Id')->on('etapa')->onDelete('restrict');

            $table->integer('idContrato');
            $table->foreign('idContrato')->references('Id')->on('contrato_empresa_contratista')->onDelete('restrict');

            $table->integer('idUsuarioAlta');
            $table->foreign('idUsuarioAlta')->references('user_id')->on('users')->onDelete('restrict');
            
            $table->dateTime('date_added')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion');
    }
};
