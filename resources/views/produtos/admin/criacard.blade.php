<x-layout-base>
    <x-slot:title>
        Flashcards
    </x-slot>
    <main id="produtos-area-restrita" class="area-restrita"  style="height: 1000%">
        <div class="container">


            <h1 class="titulo"><span>CRIAR FLASHCARDS</span></h1>
            <div class="style__espacamento">
                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


                <form id="form-cadastro-categoria" class="centro" action="{{route('categorias.store')}}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="col">

                            <div class="form-floating ">
                                <input type="text"  class="form-control" placeholder="Nome" id="nome" name="nome" required>

                                <label for="nome">Nome da Pasta</label>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div >
                                <div class="form-floating">
                                    <select class="form-select" d="destaque" name="destaque" required>
                                        <option value="" selected disabled>Selecione</option>
                                        <option value="1">Habilitado</option>
                                        <option value="0">Desabilitado</option>
                                    </select>
                                    <label for="destaque">Destaque</label>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-2">
                            <div class="btn__salvar">

                                <button type="submit" class="btn__salvar pt-1">  <a class="btn" role="button" style="font-weight: bold; text-aling:center;" aria-disabled="true">Salvar</a></button>
                            </div>
                        </div>
                      </div>
                        </div>



                </form>

            </div>
                <div class="style__espacamento">
                    <div class="table__categorias">

                        <div class="d-grid gap-2 col-6 rounded-pill mx-auto position-relative py-2 px-2"
                            data-toggle="modal" data-target="#exampleModalCenter">
                            <button class="d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125"
                                        stroke="#fffffff" stroke-width="2"></path>
                                    <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#fffffff" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <a class="btn" role="button" style="font-weight: bold;" aria-disabled="true">
                                    Adicionar</a>
                            </button>
                        </div>
                        {{-- COMEÇA O MODAL DO FORMULÁRIO DE PERGUNTA E RESPOSTA --}}
                        <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content" style="text-align: center">
                                    <div class="modal-header ">
                                        <h5 class="modal-title header_modal" id="exampleModalLongTitle">PERGUNTAS E RESPOSTAS
                                        </h5>
                                    </div>
                                    <div class="modal-body " style="text-align: center">
                                        <main id="cadastra__produto" class="p-4">
                                            <div class="container">
                                                <form action="{{ route('produtos.store') }}" method="POST"
                                                    enctype="multipart/form-data" id="form-cadastro-produto">
                                                    @method('POST')
                                                    @csrf
                                                    <div class="">
                                                        <div class="input-container3">
                                                            <label class="sr-only" for="nome">Nome</label>
                                                            <input type="text" class="" placeholder="PERGUNTA*"
                                                                id="nome" name="nome" required>
                                                            <p></p>
                                                            <div class="input-container3">
                                                                <label class="sr-only " for="codigo">Código</label>
                                                                <input type="text" class=""
                                                                    placeholder="RESPOSTA*" id="codigo"
                                                                    name="codigo" required>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="form-floating">
                                                            <select class="form-select" d="destaque" name="destaque" required>
                                                                <option value="" selected disabled>Selecione</option>
                                                                <option value="1">Habilitado</option>
                                                                <option value="0">Desabilitado</option>
                                                            </select>
                                                            <label for="destaque">Destaque</label>
                                                        </div>
                                                        <p></p>

                                                        <hr class="border border-2 opacity-50 ">

                                                        <p></p>

                                                        <div class="col-lg-12">
                                                            <div class="campo">
                                                                <label class="label__campos" for="categoria">SELECIONE O FLASHCARD</label>
                                                                @foreach (\App\Models\Categoria::all() as $categoria)
                                                                    <div class="form-check categoria-checkbox">
                                                                        <input class="form-check-input" type="checkbox" name="categoria[]" value="{{$categoria->id}}" id="categoria.{{$categoria->id}}">
                                                                        <label class="form-check-label" for="categoria.{{$categoria->id}}">{{$categoria->nome}}</label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="lim__estilo d-flex justify-content-center">
                                                        <button type="button" class="bg-primary text-white mx-3"
                                                            data-dismiss="modal">Fechar</button>

                                                        <button type=submit class="btn">Salvar</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </main>
                                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                                            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
                                        </script>
                                        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
                                        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
                                        <script>
                                            $("#form-cadastro-produto").validate({
                                                messages: {
                                                    nome: "Nome é obrigatório",
                                                    codigo: "Código é obrigatório",
                                                    //categoria: "Categoria é obrigatório",
                                                    valor: "Valor é obrigatório",
                                                    //arquivo: "Imagem é obrigatório",
                                                    status: "Status é obrigatório",
                                                    destaque: "Destaque é obrigatório",
                                                }
                                            });
                                        </script>
                                        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
                                        <link
                                            href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
                                            rel="stylesheet">

                                        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
                                        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

                                        <script>
                                            // Register the plugin with FilePond
                                            FilePond.registerPlugin(FilePondPluginImagePreview);

                                            // Get a reference to the file input element
                                            const inputElement = document.querySelector('input[type="file"]');

                                            // Create the FilePond instance
                                            const pond = FilePond.create(inputElement, {
                                                storeAsFile: true,
                                                imagePreviewHeight: 100
                                            });
                                        </script>

                                        <style>
                                            .filepond--item {
                                                width: 100px;
                                            }
                                        </style>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- TERMINA O MODAL DO FORMULÁRIO PARA COLOCAR A PERGUNTA E RESPOSTA --}}

                        @foreach ($produtos as $produto)
                            <p class="py-3"></p>
                            <div class="form_cards mx-auto">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <p class="form-title top-0 start-0">
                                        {{ $produto->id }}
                                    </p>

<!-- Button trigger modal -->

<div class="d-flex justify-content-end">
    <a href="{{ route('produtos.edit', $produto) }}" class="lixeira" >
        <i class="fa-solid fa-pencil lixeira" style="color: #080a0c; font-size: 22px;"></i>
    </a>
</div>

                                    <div>
                                        <a href="{{route('produtos.aviso',$produto)}}"  class="lixeira2">
                                            <i class="fa-regular fa-trash-can"
                                                style="color: #080a0c; font-size: 22px;"></i>
                                        </a>
                                    </div>
                            </div>
                            <div class="input-container">
                                <p>PERGUNTA: {{ $produto->nome }}</p>
                                <span></span>
                            </div>
                            <div class="input-container">
                                <p>RESPOSTA: {{ $produto->codigo }}</p>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>
        </div>
        </div>
        <div class="d-grid gap-2 col-4 mx-auto position-relative py-5 px-4" >
            <a  href="{{ route('categorias.index') }}"class="btn btn-primary rounded-sm " role="button" aria-disabled="true">TERMINOU? VAMOS ESTUDAR !! </a>
          </div>
    </main>
</x-layout-base>
