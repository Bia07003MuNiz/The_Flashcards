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
            <button wire:click="AddCarrinho()" onclick="pushTest()" class="btn btn-danger bg-purple-900">Adicionar</button>
            <a href="{{route('produtos.show',$produto)}}">Editar</a>
            <!--<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>-->
        </div>
    </div>

    @push('teste')
        @once
            <script>
                function pushTest() {
                    $('.toast').toast('show');
                }
            </script>
            <div class="toast message__style" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body">
                    Produto adicionado ao carrinho!
                </div>
            </div>   
        @endonce
        
    @endpush
</div>

