<x-layout-base>
    <x-slot:title>
        Área restrita > Categoria {{$categoria->nome}}
    </x-slot>
    <main id="exibir__categorias">
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
                    <h2 class="title__box">Dados categoria</h2>
                    <div class="posiciona__btn">
                        <a class="btn__adicionar" href="{{route('categorias.edit',$categoria)}}"><i class="fa-solid fa-pencil"></i> Editar</a>
                    </div>
                    <div>
                        <div>Ordem: {{$categoria->ordem}}</div>
                        <div>Nome: {{$categoria->nome}}</div>
                        <div>Status: @if($categoria->status == 1) Habilitado @elseif($categoria->status == 0) Desabilitado @endif</div>
                        <div>Destaque: @if($categoria->destaque == 1) Habilitado @elseif($categoria->destaque == 0) Desabilitado @endif</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout-base>