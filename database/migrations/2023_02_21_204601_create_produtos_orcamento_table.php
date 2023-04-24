<?php

use App\Models\Orcamento;
use App\Models\Produto;
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
        Schema::create('produtos_orcamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade')->default(1);
            $table->foreignIdFor(Orcamento::class)->constrained();
            $table->foreignIdFor(Produto::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos_orcamentos');
    }
};
