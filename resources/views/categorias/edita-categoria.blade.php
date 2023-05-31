<x-layout-base>
    <x-slot:title>
        Edita categoria
    </x-slot>
    <main id="editar_categorias">
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
                    <h2 class="title__box">Editar categoria</h2>
                    <form action="{{route('categorias.update',$categoria)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="campo__input">
                                    <label class="sr-only" for="ordem">Ordem</label>
                                    <input type="text" class="style__campo" placeholder="Ordem" id="ordem" name="ordem" value="{{$categoria->ordem}}">
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="campo__input ">
                                    <label class="sr-only" for="nome">Nome</label>
                                    <input type="text" class="style__campo" placeholder="Nome" id="nome" name="nome" value="{{$categoria->nome}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="campo__input ">
                                    <label class="sr-only" for="status">Status</label>
                                    <select class="sub__select" id="status" name="status">
                                        <option value="1" @if($categoria->status == 1) selected @endif>Habilitado</option>
                                        <option value="0" @if($categoria->status == 0) selected @endif>Desabilitado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="campo__input ">
                                    <label class="sr-only" for="destaque">Destaque</label>
                                    <select class="sub__select" id="destaque" name="destaque">
                                        <option value="1" @if($categoria->destaque == 1) selected @endif>Habilitado</option>
                                        <option value="0" @if($categoria->destaque == 0) selected @endif>Desabilitado</option>
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