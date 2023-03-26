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
                        <img src="assets/svg/instagram.svg" width="55" height="50" alt="Instagram">
                    </a>
                    <a href="facebook.com" target="_blank" rel="noopener" title="Facebook" class="style__rede">
                        <img src="assets/svg/facebook.svg" width="55" height="50" alt="Facebook">
                    </a>
                    <a href="twitter.com" target="_blank" rel="noopener" title="Twitter" class="style__rede">
                        <img src="assets/svg/twitter.svg" width="55" height="50" alt="Twitter">
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
        </main>
        @include('footer')
        @include('cookies')
    </body>
</html>
