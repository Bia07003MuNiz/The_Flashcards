<x-layout-base>
    <x-slot:title>
        Duvidas
    </x-slot>

    @push('scss')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    @endpush

    <div class="bg-white w-screen h-screen d-flex align-items-center justify-content-center">
        <div class="bg-white rounded-lg shadow-lg p-5 p-md-8 w-100 w-md-75">
            <h1 class="text-left fw-bold fs-3 mb-4" style="color: rgb(75, 13, 132);">DÚVIDAS</h1>
            <div class="w-20 h-1 bg-purple-900 mx-auto mb-4"></div>    
            
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" style="color: #eef0f3; background-color: #084298;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Como faço para criar uma conta?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" style=" border: 1px solid blue;" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Para criar uma conta, clique no botão "Criar conta" na página inicial e preencha o formulário com suas informações pessoais.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed"style="color: #eef0f3; background-color: #084298;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Como posso recuperar minha senha?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Para recuperar sua senha, clique no link "Esqueceu sua senha?" na página de login e siga as instruções para redefinir sua senha.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" style="color: #eef0f3; background-color: #084298;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Quais são as formas de pagamento aceitas?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Aceitamos pagamentos por cartão de crédito, boleto bancário e pix.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" style="color: #eef0f3; background-color: #084298;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Posso realizar o acesso no site em diferentes plataformas?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Sim, nosso site está disponivel para todas as plataformas.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" style="color: #eef0f3; background-color: #084298;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Atualmente atuam somente online ou fisicamente tambem?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse"  aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Atualmente estamos atuando somente nas plataformas online.
                        </div>
                    </div>
                </div>
</x-layout-base>
