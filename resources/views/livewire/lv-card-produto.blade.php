<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card text-center bg-light">
        @foreach ($produto->imagens as $imagem)
            <img src="{{$imagem->url}}" width="300" height="300" class="img-fluid" loading="lazy">
        @endforeach
        <div class="card-header">
            R$ {{number_format($produto->valor, 2, ',','.')}}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$produto->nome}}</h5>
            @auth
                @if(auth()->user()->tipo == 0)
                    <a href="{{route('produtos.show',$produto)}}"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <button wire:click="AddCarrinho()" onclick="pushTest()" class="btn btn-danger bg-purple-900"><i class="fa-solid fa-cart-plus"></i></button>
                @elseif(auth()->user()->tipo == 1)
                    <a href="{{route('produtos.edit',$produto)}}"><i class="fa-solid fa-pencil"></i></a>
                    <a href="{{route('produtos.aviso',$produto)}}"><i class="fa-solid fa-trash"></i></a>
                @endif
            @else
              <a href="{{route('produtos.show',$produto)}}"><i class="fa-solid fa-magnifying-glass"></i></a>
            @endauth
        </div>
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

