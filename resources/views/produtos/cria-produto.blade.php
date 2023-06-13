<x-layout-base>
    <x-slot:title>
        Área restrita > Cadastrar novo produto
    </x-slot>
    <main id="cadastra__produto" class="area-restrita">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="{{route('lista-produtos')}}"><i class="fa-solid fa-share fa-flip-horizontal"></i> Voltar a listagem</a>
                    <div class="style__espacamento">
                        <h2 class="title__box">Cadastrar novo produto</h2>
                        <form action="{{route('produtos.store')}}" method="POST" enctype="multipart/form-data" id="form-cadastro-produto">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="campo__input">
                                        <label class="sr-only" for="nome">Nome</label>
                                        <input type="text" class="style__campo" placeholder="Nome*" id="nome" name="nome" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="campo__input">
                                        <label class="sr-only" for="codigo">Código</label>
                                        <input type="text" class="style__campo" placeholder="Código*" id="codigo" name="codigo" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="campo__input">
                                        <label class="label__campos" for="categoria">Categoria(s)*</label>
                                        <div class="style__campo">
                                            @foreach (\App\Models\Categoria::all() as $categoria)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="categoria[]" value="{{$categoria->id}}" id="categoria.{{$categoria->id}}">
                                                    <label class="form-check-label" for="categoria.{{$categoria->id}}">{{$categoria->nome}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="campo__input">
                                        <label class="sr-only" for="informacoes">Informações</label>
                                        <textarea class="style__campo" placeholder="Informações" id="informacoes" rows="3" name="informacoes"></textarea>
                                    </div>
                                </div>
                                 <!-- 2. Initialize -->
                                <div id="uppy"></div>
                                <div class="col-lg-12">
                                    <div class="campo__input">
                                        <label for="arquivo" class="label__campos">Imagem(ns)*</label>
                                        <input type="file" multiple class="form-control style__campo" id="arquivo" name="arquivo[]" required>
                                        <p>Segure o crtl para anexar mais de 1 arquivo.</p>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="campo__input">
                                        <label class="sr-only" for="valor">Valor</label>
                                        <input type="text" class="style__campo" placeholder="Valor*" id="valor" name="valor" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="campo__input">
                                        <label class="sr-only" for="status">Status*</label>
                                        <select class="sub__select" name="status" id="status" required>
                                            <option disabled selected>Status*</option>
                                            <option value="1">Habilitado</option>
                                            <option value="0">Desativado</option>
                                        </select>
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
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>    
    <script>
        $( "#form-cadastro-produto" ).validate({
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

    <link href="https://releases.transloadit.com/uppy/v3.7.0/uppy.min.css" rel="stylesheet">

   

    <script type="module">
        import { Uppy, Dashboard } from "https://releases.transloadit.com/uppy/v3.7.0/uppy.min.js"
        const uppy = new Uppy()
        uppy.use(Dashboard, { target: '#uppy', inline: true })
      </script>
</x-layout-base>