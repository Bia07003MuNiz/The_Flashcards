<x-layout-base>
    <x-slot:title>
        Duvidas
    </x-slot>

    @push('scss')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn-icons-png.flaticon.com/512/124/124034.png?w=360">
        <script src="https://cdn-icons-png.flaticon.com/512/124/124034.png?w=360"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        @endpush


        <div class="container py-5">
  <div class="row justify-content-center">
  <div class="col-md-8 col-lg-6">
  <h1 class="text-2xl font-bold text-purple-900 text-left mb-8" style="font-size: 40px;">DUVIDAS</h1>
  
            
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" style="color: #eef0f3; background-color: #084298;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Como faço para criar uma conta?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" style=" border: 1px solid blue; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                    <div id="collapseTwo" class="accordion-collapse collapse" style=" border: 1px solid blue; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                    <div id="collapseThree" class="accordion-collapse collapse" style=" border: 1px solid blue; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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
                    <div id="collapseFour" class="accordion-collapse collapse" style=" border: 1px solid blue; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;"aria-labelledby="headingFour" data-bs-parent="#accordionExample">
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
                    <div id="collapseFive" class="accordion-collapse collapse" style=" border: 1px solid blue; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Atualmente estamos atuando somente nas plataformas online.
                        </div>
                    </div>
                </div>

                <div>
    <br>

    <div class="text-center my-5 form-control">
        
    <h1 class="text-center fs-4 mb-4 ">Não encontrou o que precisa?</h1>
    <a href="https://wa.me/SEUNUMERODOTELEFONE" target="_blank" rel="noopener" class="btn btn-success btn-lg rounded-pill">
        <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png?w=60" alt="WhatsApp Icon" class="mr-3" style="width: 60px; height: 60px; border-radius: 50%; display: inline-block; vertical-align: middle;">
        <span>Entre em contato conosco pelo <br> WhatsApp</span>
    </a>
</div>


</div>


</div>
</div>
</div>
</div>
</div>
</x-layout-base>
