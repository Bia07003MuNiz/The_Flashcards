<?php

use App\Models\Categoria;
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
        Schema::create('categorias_produtos', function (Blueprint $table) {
            $table->foreignIdFor(Categoria::class)->constrained();
            $table->foreignIdFor(Produto::class)->constrained();
            $table->timestamps();

            $table->primary(['categoria_id', 'produto_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_produtos');
    }
};
