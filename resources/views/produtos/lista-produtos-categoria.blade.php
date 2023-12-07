<x-layout-base>
    <x-slot:title>
        {{ $categoria->nome }}
    </x-slot>

    @php
        $respostas = array_fill(0, count($categoria->produtos), null);
    @endphp

    <main id="lista-produtos">
        <div class="container">
            <h1 class="titulo"><span>{{$categoria->nome}}</span></h1>

            <div class="segura__cards d-flex justify-content-center mt-5">
                @foreach ($categoria->produtos as $key => $produto)
                    <div class="card__produto produto-{{ $key + 1 }}" style="display: none;">
                        <div class="container Login " style="height: 750px">
                            <div class="row">
                                <div class="col-sm"></div>
                                <div class="col-sm">
                                    <div class="card2">
                                        <div class="card-inner">
                                            <div class="card-front">
                                                <p>{{ $produto->nome }}</p>
                                            </div>
                                            <div class="card-back">
                                                <p>{{ $produto->codigo }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm"></div>
                            </div>
                            <div class="d-flex bd-highlight certoerrado">
                                <div class="certo1">
                                    <svg class="pr-5" fill="#40C057" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 30 30" width="88px" height="88px">
                                        <path
                                            d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21.707,12.707l-7.56,7.56 c-0.188,0.188-0.442,0.293-0.707,0.293s-0.52-0.105-0.707-0.293l-3.453-3.453c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0 l2.746,2.746l6.853-6.853c0.391-0.391,1.023-0.391,1.414,0S22.098,12.316,21.707,12.707z" />
                                    </svg>
                                </div>
                                <div class="errado1">
                                    <svg fill="#FA5252" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"
                                        width="75px" height="75px">
                                        <path
                                            d="M25,2C12.319,2,2,12.319,2,25s10.319,23,23,23s23-10.319,23-23S37.681,2,25,2z M33.71,32.29c0.39,0.39,0.39,1.03,0,1.42	C33.51,33.9,33.26,34,33,34s-0.51-0.1-0.71-0.29L25,26.42l-7.29,7.29C17.51,33.9,17.26,34,17,34s-0.51-0.1-0.71-0.29	c-0.39-0.39-0.39-1.03,0-1.42L23.58,25l-7.29-7.29c-0.39-0.39-0.39-1.03,0-1.42c0.39-0.39,1.03-0.39,1.42,0L25,23.58l7.29-7.29	c0.39-0.39,1.03-0.39,1.42,0c0.39,0.39,0.39,1.03,0,1.42L26.42,25L33.71,32.29z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row my-5">
                <div class="col d-flex justify-content-center">
                    <div class="chart-container" style="width: 100%; height: 300px; position:relative; left:195px;">
                        <!-- Ajuste o tamanho do gráfico conforme necessário -->
                        <canvas id="meuGrafico"></canvas>
                    </div>
                </div>


                <div class="d-grid gap-2 col-6 mx-auto" style="width: 300px; height: 200px; margin-top: 65px; position: relative; right: 120px;">
                    <h1 id="total" style="position: relative; top: 120%; right: 135%; transform: translate(-50%, -50%);"> 0
                    </h1>

                    <button class="btn btn-danger contador-certo" type="button" style="display: none;">Certo: 0
                    </button>
                    <button class="btn btn-success contador-errado" style="display: none; ">Errado: 0</button>

            </div>

                <div class="container-respostas mt-5"></div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                var perguntas = @json($categoria->produtos);
                var respostas = new Array({{ count($categoria->produtos) }});

                $(document).ready(function () {
                    var currentCard = 1;
                    var contadorCerto = 0;
                    var contadorErrado = 0;

                    $('.produto-' + currentCard).show();

                    $('.certo1').click(function () {
                        contadorCerto++;
                        respostas[currentCard - 1] = 'certo';
                        atualizarContadores();
                        proximoCard();
                    });

                    $('.errado1').click(function () {
                        contadorErrado++;
                        respostas[currentCard - 1] = 'errado';
                        atualizarContadores();
                        proximoCard();
                    });

                    function proximoCard() {
                        $('.produto-' + currentCard).hide();
                        currentCard++;

                        if (currentCard <= {{ count($categoria->produtos) }}) {
                            $('.produto-' + currentCard).show();
                        } else {
                            $('.btn__finalizar').show();
                            $('.contador-certo').show();
                            $('.contador-errado').show();
                            $('#total').show(); // Tornar visível o total de perguntas
                            exibirRelatorio();
                            exibirRespostas();
                        }
                    }

                    function atualizarContadores() {
                        $('.contador-certo').text('Certo: ' + contadorCerto);
                        $('.contador-errado').text('Errado: ' + contadorErrado);
                        $('#total').text('' + (contadorCerto + contadorErrado));
                    }

                    function exibirRelatorio() {
                        var dadosGrafico = [contadorCerto, contadorErrado];
                        var ctx = document.getElementById('meuGrafico').getContext('2d');
                        var meuGrafico = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                                datasets: [{
                                    data: dadosGrafico,
                                    backgroundColor: ['green', 'red'],
                                }]
                            },
                            options: {
                                responsive: true,
                                legend: {
                                    display: true,
                                    position: 'right',
                                },
                            }
                        });
                    }
                });

                function exibirRespostas() {
    var containerRespostas = $('.container-respostas');

    for (var i = 0; i < respostas.length; i++) {
        var card = $('<div class="card mt-5"></div>');

        var cardBody = $('<div class="card-body"></div>');
        cardBody.append('<h5 class="card-title">Pergunta ' + (i + 1) + '</h5>');
        cardBody.append('<p class="card-text">Pergunta: ' + perguntas[i].nome + '</p>');
        cardBody.append('<p class="card-text">Resposta: ' + perguntas[i].codigo + '</p>');
        card.append(cardBody);

        card.attr('id', 'cardResposta' + (i + 1));

        if (respostas[i] === 'certo') {
            card.css('border', '3px solid #40C057');
        } else if (respostas[i] === 'errado') {
            card.css('border', '3px solid #FA5252');
        }

        containerRespostas.append(card);
    }

    // Mostrar o botão após responder todos os cards
    if (respostas.every(resposta => resposta !== null)) {
        var botaoTerminou = $('<div class="d-grid gap-2 col-4 mx-auto position-relative py-5 px-4" ></div>');
        botaoTerminou.append('<a href="{{ route('categorias.index') }}" class="btn btn-primary rounded-sm " role="button" aria-disabled="true">TERMINEI </a> <p></p> <a href="{{ route('criacard') }}" type="button" class="btn btn-link">EDITAR FLASHCARDS </a>');
        containerRespostas.append(botaoTerminou);
    }
}



            </script>
        </div>
    </main>
</x-layout-base>