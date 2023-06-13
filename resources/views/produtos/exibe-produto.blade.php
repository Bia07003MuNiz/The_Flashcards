<x-layout-base>
    <x-slot:title>
        Info de produto
    </x-slot>
    <main id="produto-detalhes">
      <div class="container">
        <div class="titulo"><span>PRODUTOS</span></div>
        <div class="row">
          <div class="col-lg-6">
            <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="indicatorItem active" aria-current="true" aria-label="Banner 1"></button>
                  <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" class="indicatorItem" aria-label="Banner 2"></button>
              </div>
              <div class="carousel-inner">
                @foreach ($produto->imagens as $imagem)
                  <div class="carousel-item active" data-bs-interval="10000">
                      <img src="{{$imagem->url}}" class="img-fluid" width="300" height="300" loading="lazy">
                  </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h5 class="card-title">{{$produto->nome}} -  {{$produto->codigo}}</h5>
            <p class="card-text"> {{$produto->informacoes}}</p>
            <p class="card-text"><small class="text-body-secondary"> 
              @foreach ($produto->categorias as $categoria)<p>  <b>Categorias: </b> {{$categoria->nome}}</p>
              @endforeach</small></p>
              <div class="btn__style mx-2 ms-4">
                R$ {{number_format($produto->valor, 2, ',','.')}}
            </div>
            @auth
              <a href="{{route('produtos.adicionar',$produto)}}">Adicionar ao carrinho <i class="fa-solid fa-cart-plus"></i></a>
            @endauth
          </div>
        </div>
        <div class="btn__center">
            <a href="javascript:history.back()" class="btn__style">VOLTAR</a>
        </div>
      </div>
    </main>
</x-layout-base>