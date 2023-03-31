<!DOCTYPE html>
<html lang="pt-BR">
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
    <head>
        <title>Congelados</title>
        <meta name="description" content="Catálogo para anúncio e solicitação de orçamento de produtos.">
        <meta name="keywords" content="Catálogo, Produtos">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&family=Sono&display=swap" rel="stylesheet">
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7de26de2f7.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @include('header')
        <main>
            <div class="seguraBanner">
                <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="indicatorItem active" aria-current="true" aria-label="Banner 1"></button>
                        <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" class="indicatorItem" aria-label="Banner 2"></button>
                        <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="2" class="indicatorItem" aria-label="Banner 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <a href="google.com" target="_blank" rel="noopener" title="Banner">
                                <img src="assets/images/Banner.jpg" class="d-block w-100 img-fluid" alt="Banner" width="1920" height="600">
                            </a>
                        </div>
                        <div class="carousel-item" data-bs-interval="20000">
                            <a href="google.com" target="_blank" rel="noopener" title="Banner">
                                <img src="https://via.placeholder.com/1920x600" class="d-block w-100 img-fluid" alt="Banner" width="1920" height="600">
                            </a>
                        </div>
                        <div class="carousel-item" data-bs-interval="30000">
                            <a href="google.com" target="_blank" rel="noopener" title="Banner">
                                <img src="https://via.placeholder.com/1920x600" class="d-block w-100 img-fluid" alt="Banner" width="1920" height="600">
                            </a>
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
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4" data-animate="zoomIn animated">
                            <a class="card__chamada" href="#" target="_blank" rel="noopener" title="Alta qualidade">
                                <div class="chamada__icone">
                                    <img src="assets/images/chamada1.png" width="118" height="118" alt="Ícone selo de aprovação">
                                </div>
                                <h5 class="chamada__texto">Produtos de alta qualidade</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 card__chamada" data-animate="bounceIn animated">
                            <a class="card__chamada" href="#" target="_blank" rel="noopener" title="Preço baixo">
                                <div class="chamada__icone">
                                    <img src="assets/images/chamada2.png" width="118" height="119" alt="Ícone mão de preço baixo">
                                </div>
                                <h5 class="chamada__texto">Preço mais baixo do mercado</h5>
                            </a>
                        </div>
                        <div class="col-lg-4" data-animate="fadeIn animated">
                            <a class="card__chamada" href="#" target="_blank" rel="noopener" title="Descontos">
                                <div class="chamada__icone">
                                    <img src="assets/images/chamada3.png" width="118" height="118" alt="Ícone de desconto">
                                </div>
                                <h5 class="chamada__texto">Descontos exclusivos</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="secaoCategorias">
                <div class="container">
                    <div class="box__img__cats">
                        <a href="#" title="Categoria 3">
                            <img src="assets/images/categoria3.png" class="img-fluid" alt="Categoria 3" width="500" height="200">
                        </a>
                        <a href="#" title="Categoria 4">
                            <img src="assets/images/categoria4.png" class="img-fluid" alt="Categoria 4" width="500" height="200">
                        </a>
                    </div>
                    <div>
                        <h1>Veja por categorias</h1>
                    </div>
                    <div class="box__img__cats">
                        <a href="#" title="Categoria 1">
                            <img src="assets/images/categoria1.png" class="img-fluid" alt="Categoria 1" width="500" height="200">
                        </a>
                        <a href="#" title="Categoria 2">
                            <img src="assets/images/categoria2.png" class="img-fluid" alt="Categoria 2" width="500" height="200">
                        </a>
                    </div>
                </div>
            </section>
            <section id="secaoProdutos">
                <div class="container">
                    <h1>Conheça os produtos do<br>momento</h1>
                    <!--Carousel-->
                </div>
            </section>
            <section id="secaoComoFazer">
                <div class="container">
                    <h1>Como fazer meu pedido?</h1>
                </div>
            </section>
        </main>
        @include('footer')
        @include('cookies')
    </body>
</html>
