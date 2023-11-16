<x-layout-base>
    <x-slot:title>
        Congelados
    </x-slot>
    <main>

        <head>




            <link href="{{ asset('scss/logado.scss') }}" rel="stylesheet">
        </head>

        <body>

            <div class="container">
                <h1 class="flash">BEM VINDO(A) <p></p> USUÁRIO</h1>
                <p>
                <p>

                <div class="d-grid gap-2 col-6 rounded-pill mx-auto position-relative py-5 px-4"
                    data-target="#exampleModalCenter">
                    <a href="/criacard" class="btn btn-primary rounded-pill " role="button" aria-disabled="true">CRIAR
                        FLASHCARDS </a>
                </div>

                <!-- CARDS PERGUNTAS E RESPOSTAS  -->
                <div class="row">
                    <div class="col order-last"></div>
                    <div class="col">


                        <p class="p-1"></p>



                        <div class="container_cards2">
                            <form class="form_cards">
                                <p class="form-title top-0 start-0">1
                                    <a href="#"><img src="icones/editar.png" class="editar"> </a>
                                    <a href="#"><img src="icones/lixeira.png" class="lixeira"> </a>
                                </p>
                                <div class="input-container">
                                    <h2 class="flash2">NOME DA PASTA</h2>
                                    <div class="flash2">TOTAL DE PERGUNTA = 2 </div><span></span>
                                </div>
                                <div class="input-container">


                                    <div class="d-grid w-25 p-3 mx-auto position-relative " data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <a class="btncard text-center text-dark" role="button"
                                            aria-disabled="true">Estudar
                                            agora </a>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content" style="text-align: center">
                                                <div class="modal-header d-flex justify-content-center ">
                                                    <h5 class="modal-title " id="exampleModalLongTitle">VAMOS ESTUDAR ?
                                                    </h5>

                                                </div>
                                                <div class="modal-body " style="text-align: center">
                                                    <div class="position-relative"> Adiciona a quantidade de pergunta
                                                        que você
                                                        quer estudar </div>
                                                    <div class="form-floating d-flex justify-content-center">
                                                        <input type="text" class="form-control w-50 p-3"
                                                            name="numero" placeholder="">
                                                    </div>

                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Fechar</button>
                                                    <a href="#"> <button type="button"
                                                            class="btn btn-primary">Começar</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                        <p></p>


                    </div>
                    <div class="col order-first"></div>


                </div>

            </div>
            <p class="py-2">
            <p>

        </body>
    </main>
</x-layout-base>
