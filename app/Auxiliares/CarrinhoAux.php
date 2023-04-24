<?php 
namespace App\Auxiliares;

use App\Models\Orcamento;
use App\Models\ProdutosOrcamento;
use Illuminate\Support\Facades\Auth;

class CarrinhoAux{
    public function PegaCarrinho()
    {
        $carrinho = Orcamento::where('status', 0)->where('user_id', Auth::id())->first() ?? new Orcamento;

        $carrinho->user_id = Auth::id();
        $carrinho->status = 0;
        $carrinho->save();

        return $carrinho;
    }

    public function AddItemCarrinho($item, $quantidade)
    {
        $carrinho = $this->PegaCarrinho();

        $itemCarrinho = $carrinho->Itens()->where('produto_id', $item->id)->first() ?? new ProdutosOrcamento();

        $itemCarrinho->quantidade = $quantidade;
        $itemCarrinho->orcamento_id = $carrinho->id;
        $itemCarrinho->produto_id = $item->id;
        $itemCarrinho->save();
        
        return $itemCarrinho;
    }
}