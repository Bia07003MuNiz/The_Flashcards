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
            $table->string('cpf');
            $table->string('Celular');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cep');
            $table->string('uf');
            $table->string('Cidade');
            $table->string('num');
            $table->string('Bairro');
            $table->string('rua');
            $table->string('compl');
            $table->string('remember_token')->default("");
            $table->tinyInteger('tipo')->default(0)->comment('0 - cliente, 1 - funcionario');



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
