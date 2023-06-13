<x-layout-base>
    <x-slot:title>
        Congelados
    </x-slot>
    <main>
        <div class="seguraBanner">
            <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="indicatorItem active" aria-current="true" aria-label="Banner 1"></button>
                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" class="indicatorItem" aria-label="Banner 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="assets/images/Banner.jpg" class="d-block w-100 img-fluid" alt="Banner" width="1920" height="600">
                    </div>
                    <div class="carousel-item" data-bs-interval="20000">
                        <img src="assets/images/Banner.jpg" class="d-block w-100 img-fluid" alt="Banner" width="1920" height="600">
                    </div>
                </div>
            </div>
            <div id="redesSociais">
                <a href="instagram.com" target="_blank" rel="noopener" title="Instagram" class="style__rede">
                    <img src="assets/svg/instagram.svg" width="45" height="40" alt="Instagram">
                </a>
                <a href="facebook.com" target="_blank" rel="noopener" title="Facebook" class="style__rede">
                    <img src="assets/svg/facebook.svg" width="45" height="40" alt="Facebook">
                </a>
                <a href="twitter.com" target="_blank" rel="noopener" title="Twitter" class="style__rede">
                    <img src="assets/svg/twitter.svg" width="45" height="40" alt="Twitter">
                </a>
            </div>
        </div>
        <section id="secaoChamadas">
            <div class="container container__style">
                <div class="row">
                    <div class="col-lg-4" data-animate="zoomIn animated">
                        <div class="card__chamada" title="Alta qualidade">
                            <div class="chamada__icone">
                                <img src="assets/images/chamada1.png" width="90" height="90" alt="Ícone selo de aprovação">
                            </div>
                            <h5 class="chamada__texto">Produtos de alta qualidade</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 card__chamada" data-animate="bounceIn animated">
                        <div class="card__chamada" title="Preço baixo">
                            <div class="chamada__icone">
                                <img src="assets/images/chamada2.png" width="90" height="90" alt="Ícone mão de preço baixo">
                            </div>
                            <h5 class="chamada__texto">Preço mais baixo<br>do mercado</h5>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeIn animated">
                        <div class="card__chamada" title="Descontos">
                            <div class="chamada__icone">
                                <img src="assets/images/chamada3.png" width="90" height="90" alt="Ícone de desconto">
                            </div>
                            <h5 class="chamada__texto">Descontos exclusivos</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="secaoCategorias">
            <div class="container">
                <div class="row row__style">
                    <div class="col-lg-5 box__img__cats">
                        <a href="{{route('produtos.categoria.listar', 6)}}" title="Categoria Churrasco" class="categoria__bloco">
                            <img src="assets/images/categoria3.png" class="img-fluid" alt="Categoria Churrasco" width="500" height="200">
                        </a>
                        <a href="{{route('produtos.categoria.listar', 5)}}" title="Categoria Peixes" class="categoria__bloco">
                            <img src="assets/images/categoria4.png" class="img-fluid" alt="Categoria Peixes" width="500" height="200">
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <h1 class="title__home">Veja por categorias</h1>
                    </div>
                    <div class="col-lg-5 box__img__cats">
                        <a href="{{route('produtos.categoria.listar', 7)}}" title="Categoria Massas" class="categoria__bloco">
                            <img src="assets/images/categoria1.png" class="img-fluid" alt="Categoria Massas" width="500" height="200">
                        </a>
                        <a href="{{route('produtos.categoria.listar', 8)}}" title="Categoria Ofertas" class="categoria__bloco">
                            <img src="assets/images/categoria2.png" class="img-fluid" alt="Categoria Ofertas" width="500" height="200">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        @if(!empty(\App\Models\Produto::where('destaque',1)->get()))
            <section id="secaoProdutos">
                <div class="container">
                    <h1 class="title__home">Conheça os produtos do<br>momento</h1>
                    <div class="row">
                        @foreach (\App\Models\Produto::where('destaque',1)->limit(3)->get() as $produto)
                            <div class="col-lg-4">
                                @livewire('lv-card-produto', ['produto'=>$produto])
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        <section id="secaoComoFazer">
            <div class="container">
                <h1 class="title__home">Como fazer meu pedido?</h1>
                <p style="text-align: center">Para começar faça <a href="{{route('login')}}">login</a> e caso não tenha um cadastro, <a href="{{route('cadastre-se')}}">cadastre-se</a> e faça login.</p>
                <div class="blogo__cards">
                    <div class="card__fazer">
                        <div class="card__fazer__icone">
                            <span>1</span>
                            <div class="fundo__img">
                                <img src="assets/images/icone1.png" width="70" height="70" alt="Ícone 1">
                            </div>
                        </div>
                        <div class="card__fazer__textos">
                            <div class="fazer__title">Adicionar os produtos no carrinho</div>
                            <div class="fazer__texto">Adicione todos os produtos do seu interesse ao seu carrinho de compras.</div>
                        </div>
                    </div>
                    <div class="card__fazer">
                        <div class="card__fazer__icone">
                            <span>2</span>
                            <div class="fundo__img">
                                <img src="assets/images/icone2.png" width="70" height="70" alt="Ícone 2">
                            </div>
                        </div>
                        <div class="card__fazer__textos">
                            <div class="fazer__title">Solicitar<br>orçamento</div>
                            <div class="fazer__texto">Clique no botão solicitar orçamento, disponivel no seu carrinho.</div>
                        </div>
                    </div>
                    <div class="card__fazer">
                        <div class="card__fazer__icone">
                            <span>3</span>
                            <div class="fundo__img">
                                <img src="assets/images/icone3.png" width="70" height="70" alt="Ícone 3">
                            </div>
                        </div>
                        <div class="card__fazer__textos">
                            <div class="fazer__title">Contato de nossos representantes</div>
                            <div class="fazer__texto">Após o envio do seu pedido, aguarde o contato de um de nossos representantes, que deve ocorrer em até 1 dia útil.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout-base>