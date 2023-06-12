<div class="card__produto">
    <div class="card__produto__style">
        <div class="card__produto__dados">
            <div class="card__dados__titulo">{{$produto->nome}}</div>
            <div class="card__dados__img">
                <img src="{{$produto->imagens()->first()->url}}" width="300" height="300" class="img-fluid" loading="lazy">
                <!--@foreach ($produto->imagens as $imagem)
                    <img src="{{$imagem->url}}" width="300" height="300" class="img-fluid" loading="lazy">
                @endforeach-->
            </div>
        </div>
        <div class="card__produto__btns">
            <a href="{{route('produtos.show',$produto)}}" class="btn__acao"><i class="fa-solid fa-magnifying-glass"></i></a>
            @auth
                <button wire:click="AddCarrinho()" onclick="pushTest()" class="btn__acao"><i class="fa-solid fa-cart-plus"></i></button>
            @endauth
        </div>
    </div>
    <div class="card__produto__preco">
        <span>R$ {{number_format($produto->valor, 2, ',','.')}}</span>
    </div>
    @push('adicionaCarrinho')
        @once
            <script>
                function pushTest() {
                    $('.toast').toast('show');
                }
            </script>
            <div class="toast message__style" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body">
                    Produto adicionado ao carrinho! <a href="{{route('carrinho')}}">Ir ao carrinho</a>.
                </div>
            </div>   
        @endonce
    @endpush
</div>