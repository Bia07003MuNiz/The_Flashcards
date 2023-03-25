<x-layout-base>
    <x-slot:title>
        Duvidas
    </x-slot>

    @push('scss')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    @endpush

    <div class="bg-white w-screen h-screen d-flex align-items-center justify-content-center">
        <div class="bg-white rounded-lg shadow-lg p-5 p-md-8 w-100 w-md-75">
            <h1 class="text-center text-purple-900 fw-bold fs-3 mb-4">DÚVIDAS</h1>
            <div class="w-20 h-1 bg-purple-900 mx-auto mb-4"></div>    
            
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Como faço para criar uma conta?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Para criar uma conta, clique no botão "Criar conta" na página inicial e preencha o formulário com suas informações pessoais.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Quais são as formas de pagamento aceitas?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Aceitamos pagamentos por cartão de crédito, boleto bancário e pix.
                        </div>
                    </div>
                </div>
</x-layout-base>
