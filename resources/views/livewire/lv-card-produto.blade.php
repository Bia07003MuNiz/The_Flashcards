<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex aling-items-stretch">
        <a href="{{route('produtos.show',$produto)}}"></a>
        <div class="card text-center bg-light">
            <img src="assets/images/produtos/carne.jpg" classe="card-img-top">
            <div class="card-header">
                R$ {{number_format($produto->valor, 2, ',','.')}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$produto->nome}}</h5>
                <button wire:click="AddCarrinho()" class="btn btn-danger bg-purple-900">Adicionar</button>
                <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
            </div>
        </div>
    </div>
</div>
