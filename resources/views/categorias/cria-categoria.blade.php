<x-layout-base>
    <x-slot:title>
        Área restrita > Cadastrar nova categoria
    </x-slot>
    <main id="cadastrar_categoria">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                <div class="bloco__menu">
                    <a class="menu__item @if(Request::is('meus-dados') || Request::is('alterar-senha')) active @endif" href="{{route('meus-dados')}}">Meus dados</a>
                    <a class="menu__item {{ Request::is('categorias*') ? 'active' : '' }}" href="{{route('categorias.index')}}">Categorias</a>
                    <a class="menu__item {{ Request::is('produtos*') ? 'active' : '' }}" href="{{route('produtos.index')}}">Produtos</a>
                    <a class="menu__item " href="">Relatórios</a>
                </div>
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="{{route('categorias.index')}}"><i class="fa-solid fa-share fa-flip-horizontal"></i> Voltar a listagem</a>
                    <form class="centro" action="{{route('categorias.store')}}" method="POST">
                        @method('POST')
                        @csrf
                        <h2 class="campo_titulo2">Cadastrar nova categoria</h2>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="campo__input">
                                    <label class="sr-only" for="ordem">Ordem</label>
                                    <input type="text" class="style__campo" placeholder="Ordem" id="ordem" name="ordem">
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="campo__input ">
                                    <label class="sr-only" for="nome">Nome</label>
                                    <input type="text" class="style__campo" placeholder="Nome" id="nome" name="nome">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="campo__input ">
                                    <label class="sr-only" for="status">Status</label>
                                    <select class="sub__select" id="status" name="status">
                                        <option value="" selected disabled>Status</option>
                                        <option value="1">Habilitado</option>
                                        <option value="0">Desabilitado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="campo__input ">
                                    <label class="sr-only" for="destaque">Destaque</label>
                                    <select class="sub__select" id="destaque" name="destaque">
                                        <option value="" selected disabled>Destaque</option>
                                        <option value="1">Habilitado</option>
                                        <option value="0">Desabilitado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="lim__estilo">
                            <button type=submit class="button">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layout-base>