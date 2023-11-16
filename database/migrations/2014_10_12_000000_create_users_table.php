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
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('celular');
            $table->string('genero');
            $table->string('uf');
            $table->string('cidade');
            $table->string('rua');
            $table->string('num');
            $table->string('bairro');
            $table->string('remember_token')->default("");
            $table->tinyInteger('tipo')->default(0)->comment('0 - Estudante , 1 - Professor');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
