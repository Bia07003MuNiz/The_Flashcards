<x-layout-base>
    <x-slot:title>
        Área restrita > Cadastrar novo produto
    </x-slot>
    <main id="cadastra__produto" class="area-restrita">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>



            <div class="style__espacamento">
                <h2 class="title__box">Cadastrar novo produto</h2>
                <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data"
                    id="form-cadastro-produto">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="campo__input">
                                <label class="sr-only" for="nome">Nome</label>
                                <input type="text" class="style__campo" placeholder="Nome*" id="nome"
                                    name="nome" required>
                            </div>
                            <div class="campo__input">
                                <label class="sr-only" for="codigo">Código</label>
                                <input type="text" class="style__campo" placeholder="Código*" id="codigo"
                                    name="codigo" required>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="campo__input ">
                                <label class="sr-only" for="destaque">Destaque*</label>
                                <select class="sub__select" name="destaque" id="destaque" required>
                                    <option disabled selected>Destaque*</option>
                                    <option value="1">Habilitado</option>
                                    <option value="0">Desativado</option>
                                </select>
                            </div>
                        </div>
                        <div class="lim__estilo">
                            <button type=submit class="btn__salvar">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


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
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
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


</x-layout-base>
