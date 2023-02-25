<!DOCTYPE html>
<html lang="pt-BR">
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Congelados</title>
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        @include('header')
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
                <a href="instagram.com" target="_blank" rel="noopener" title="Instagram">
                    <img src="assets/svg/instagram.svg" width="55" height="50" alt="Instagram">
                </a>
                <a href="facebook.com" target="_blank" rel="noopener" title="Facebook">
                    <img src="assets/svg/facebook.svg" width="55" height="50" alt="Facebook">
                </a>
                <a href="twitter.com" target="_blank" rel="noopener" title="Twitter">
                    <img src="assets/svg/twitter.svg" width="55" height="50" alt="Twitter">
                </a>
            </div>
        </div>
        <section id="secaoChamadas">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-animate="zoomIn animated">
                        <a href="#" target="_blank" rel="noopener">
                            <div class="d-flex position-relative">
                                <img src="assets/images/chamada1.png" class="flex-shrink-0 me-3" width="118" height="118" alt="Ícone selo de aprovação">
                                <div>
                                <h5 class="mt-0">Produtos de alta qualidade</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4" data-animate="bounceIn animated">
                        <a href="#" target="_blank" rel="noopener">
                            <div class="d-flex position-relative">
                                <img src="assets/images/chamada2.png" class="flex-shrink-0 me-3" width="118" height="119" alt="Ícone mão de preço baixo">
                                <div>
                                <h5 class="mt-0">Preço mais baixo do mercado</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4" data-animate="fadeIn animated">
                        <a href="#" target="_blank" rel="noopener">
                            <div class="d-flex position-relative">
                                <img src="assets/images/chamada3.png" class="flex-shrink-0 me-3" width="118" height="118" alt="Ícone de desconto">
                                <div>
                                <h5 class="mt-0">Descontos exclusivos</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        @include('footer')
    </body>
</html>
