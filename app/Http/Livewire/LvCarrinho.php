<?php

namespace App\Http\Livewire;

use App\Models\Orcamento;
use App\Models\ProdutosOrcamento;
use Livewire\Component;

class LvCarrinho extends Component
{
    public ?Orcamento $orcamento;

    public function Mount()
    {
        $this->orcamento = auth()->user()->carrinho()->first();
    }

    public function render()
    {
        return view('livewire.lv-carrinho')->layout('components.layout-base');
    }

    public function addItem($id)
    {
        $item = ProdutosOrcamento::find($id);
        $item->quantidade++;
        $item->save();

        $this->orcamento->refresh();
    }

    public function subItem($id)
    {
        $item = ProdutosOrcamento::find($id);
        if($item->quantidade > 1){
            $item->quantidade--;
        }
        $item->save();

        $this->orcamento->refresh();
    }

    public function removeItem($id)
    {
        $item = ProdutosOrcamento::find($id);
        $item->delete();

        $this->orcamento->refresh();
    }

    public function solicitarOrcamento()
    {
        $this->orcamento->status=1;
        $this->orcamento->save();
        $this->orcamento = auth()->user()->carrinho()->first();
    }
}
