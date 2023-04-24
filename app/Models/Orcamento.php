<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use App\Models\ProdutoaOrcamento;

class Orcamento extends Model
{
    use HasFactory;

    public function Itens()
    {
        return $this->hasMany(ProdutosOrcamento::class);
    }
}
