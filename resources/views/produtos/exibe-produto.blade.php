<x-layout-base>
    <x-slot:title>
        Info de produto
    </x-slot>
    <main id="produto-detalhes">
      <div class="container">
        <h1 class="titulo"><span>PRODUTOS</span></h1>
        <div class="row">
          <div class="col-lg-6">
            <div id="carouselProduto" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="indicatorItem active" aria-current="true" aria-label="Banner 1"></button>
                  <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" class="indicatorItem" aria-label="Banner 2"></button>
              </div>
              <div class="carousel-inner">
                @once {{$class = "active"}} @endonce
                @foreach ($produto->imagens as $imagem)
                  <div class="carousel-item {{$class}}" data-bs-interval="10000">
                      <img src="{{$imagem->url}}" class="img-fluid" width="300" height="300" loading="lazy">
                  </div>
                  {{$class = ""}}
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h2 class="title__prod"><span>{{$produto->codigo}}</span> - {{$produto->nome}}</h2>
            <div class="categ__prod">
              <b>Categoria(s):</b>
              <ul>
                @foreach ($produto->categorias as $categoria)
                  <li>{{$categoria->nome}}</li>
                @endforeach
              </ul>
            </div>
            <p class="texto__style" style="text-align: justify">{{$produto->informacoes}}</p>
            <div class="buttons__style">
              <div class="btn__preco">
                R$ {{number_format($produto->valor, 2, ',','.')}}
              </div>
              @auth
                <a href="{{route('produtos.adicionar',$produto)}}" class="btn__carrinho">Adicionar ao carrinho <i class="fa-solid fa-cart-plus"></i></a>
              @endauth
            </div>
          </div>
        </div>
        <div class="btn__center">
            <a href="javascript:history.back()" class="btn__style">VOLTAR</a>
        </div>
      </div>
    </main>
</x-layout-base>