<x-layout-base>
    <x-slot:title>
        Área restrita > Cadastrar produto
    </x-slot>
    <main id="cadastra__produto">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="{{route('lista-produtos')}}"><i class="fa-solid fa-share fa-flip-horizontal"></i> Voltar a listagem</a>
                    <h2 class="campo_titulo2">Cadastrar novo produto</h2>
                    <form class="centro" action="{{route('produtos.store')}}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="campo__input ">
                                    <label class="sr-only" for="nome">Nome</label>
                                    <input type="text" class="style__campo" placeholder="Nome" id="nome" name="nome">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="campo__input ">
                                    <label class="sr-only" for="codigo">Código</label>
                                    <input type="text" class="style__campo" placeholder="Código" id="codigo" name="codigo">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <select class="form-select" multiple aria-label="Categorias" name="categoria[]">
                                    <option selected disabled>Categorias</option>
                                    @foreach (\App\Models\Categoria::all() as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <div class="campo__input ">
                                    <label class="sr-only" for="informacoes">Informações</label>
                                        <textarea class="form-control style__campo" placeholder="Informações" id="informacoes" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="campo__input ">
                                    <label class="sr-only" for="valor">Valor</label>
                                    <input type="text" class="style__campo" placeholder="Valor" id="valor" name="valor">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="campo__input ">
                                    <label for="arquivo" class="sr-only">Imagens</label>
                                    <input type="file" multiple class="form-control" id="arquivo" name="arquivo[]">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="campo__input ">
                                    <label class="sr-only" for="status">Status</label>
                                    <select class="sub__select" name="status" id="status">
                                        <option disabled selected>Status</option>
                                        <option value="1">Habiliado</option>
                                        <option value="0">Desativado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="campo__input ">
                                    <label class="sr-only" for="destaque">Destaque</label>
                                    <select class="sub__select" name="destaque" id="destaque">
                                        <option disabled selected>Destaque</option>
                                        <option value="1">Habiliado</option>
                                        <option value="0">Desativado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="lim__estilo">
                                <button type=submit class="button">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layout-base>