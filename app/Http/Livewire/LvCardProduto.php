<?php

namespace App\Http\Livewire;

use App\Auxiliares\CarrinhoAux;
use Livewire\Component;

class LvCardProduto extends Component
{
    public $produto;

    public function render()
    {
        return view('livewire.lv-card-produto');
    }

    public function AddCarrinho()
    {
        $carrinhoAux = new CarrinhoAux();
        
        $carrinhoAux->AddItemCarrinho($this->produto, 1);
    }
}
