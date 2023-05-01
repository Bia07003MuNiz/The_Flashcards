<div>
    {{-- The Master doesn't talk, he acts. --}}
    <main id="carrinho">
        <div class="container">
            <div class="titulo">
                <span>ORÇAMENTO</span>
            </div>
            <div class="box__carrinho">
                @if($orcamento && $orcamento->Itens()->count()>0)
                    <div class="carrinho__conteudo">
                        <div class="carrinho__header">
                            <div class="carrinho__produto">PRODUTO(S) NO CARRINHO</div>
                            <div class="carrinho__quantidade">QUANTIDADE</div>
                        </div>
                        <div class="carrinho__listagem">
                            @foreach($orcamento->Itens as $item)
                                <div class="carrinho__item">
                                    <div class="carrinho__produto" data-text=" PRODUTO(S) NO CARRINHO">
                                        <a class="carrinho__produto__card" href="produto-detalhes.html">
                                            <figure class="carrinho__produto__img">
                                                <img class="img-fluid" src="{{$item->Produto->imagens()->first()->url}}" width="95" height="95" alt="Imagem Carrinho" loading="lazy">
                                            </figure>
                                            <div class="carrinho__produto__desc">{{$item->Produto->nome}}</div>
                                        </a>
                                    </div>
                                    <div class="carrinho__quantidade" data-text="QUANTIDADE">
                                        <button wire:click="subItem({{$item->id}})">
                                            <i class="fa-solid fa-circle-minus"></i>
                                        </button>
                                        <p class="card-text">{{$item->quantidade}}</p>
                                        <button wire:click="addItem({{$item->id}})">
                                            <i class="fa-solid fa-circle-plus"></i>  
                                        </button>
                                    </div>
                                    <div class="carrinho__excluir">
                                        <button wire:click="removeItem({{$item->id}})">
                                            <i class="fa-solid fa-trash"></i>  
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    Nenhum produto adicionado.
                @endif
            </div>
            <a class="button__style" href="{{route('produtos.index')}}">ADICIONAR MAIS PRODUTOS</a>
            @if($orcamento && $orcamento->Itens()->count()>0)
                <button class="button__style" wire:click="solicitarOrcamento()" type="submit">SOLICITAR ORÇAMENTO</button>
            @endif
        </div>
    </main>
</div>
