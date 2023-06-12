<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use App\Models\ProdutoaOrcamento;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orcamento extends Model
{
    use HasFactory;

    public function Itens()
    {
        return $this->hasMany(ProdutosOrcamento::class);
    }

    public function produtosOrcamentos()
    {
        return $this->hasMany(ProdutosOrcamento::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function statusTexto(){
        switch ($this->status) {
            case 0:
                return "Carrinho";
            break;

            case 1:
                return "Recebido";
            break;

            case 2:
                return "Em andamento";
            break;

            case 3:
                return "Finalizado";
            break;
            
            default:
                return "Status não definido";
            break;
        }
    }

    public function dataFormatada(){
        return $this->created_at->format('d/m/Y');
    }
}
