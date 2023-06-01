<x-layout-base>
    <x-slot:title>
        Info de produto
    </x-slot>
    @push('scss')
        @vite(['resources/scss/teste.scss'])
    @endpush
    <div class="container me-4 mt-5  mb-5" >
    <div class="row">
    <div class=" col-lg-2" >
    </div>
    @auth
        <a href="{{route('produtos.adicionar',$produto)}}">Adicionar ao carrinho <i class="fa-solid fa-cart-plus"></i></a>
    @endauth
    



<div class="card mb-3" style="max-width: 540px; border-width: 2px; border-style: solid; border-color:  rgb(0, 0, 0); border-radius: 30px 0px 30px 0px;">
  <div class="row g-0">
    <div class="col-md-4 my-5">
    @foreach ($produto->imagens as $imagem)
      <img src="{{$imagem->url}}" class="img-fluid rounded-start" >
      @endforeach
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$produto->nome}} -  {{$produto->codigo}}</h5>
        <p class="card-text"> {{$produto->informacoes}}</p>
        <p class="card-text"><small class="text-body-secondary"> 
          @foreach ($produto->categorias as $categoria)<p>  <b>Categorias: </b> {{$categoria->nome}}</p>
          @endforeach</small></p>
          <div class="btn__style mx-2 ms-4">
            R$ {{number_format($produto->valor, 2, ',','.')}}
        </div>
      </div>
    </div>
  </div>
 

</div>

</div>
<a href="javascript:history.back()" class="btn btn-primary"><i class="fa-solid fa-arrow-left "></i> VOLTAR </a>

</div>

</div></div>
</x-layout-base>