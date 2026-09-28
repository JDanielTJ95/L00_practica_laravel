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
        Schema::create('users', function (Blueprint $table) {

            $table->integer('user_id')->autoIncrement()->primary();
            $table->string('firstname', 20);
            $table->string('lastname', 20);
            $table->string('user_name', 64);
            $table->string('user_password_hash', 255);
            $table->string('user_email', 64);
            $table->dateTime('date_added');
            $table->string('usuarios', 1)->default('S');
            $table->string('inventarios', 1)->default('S');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
