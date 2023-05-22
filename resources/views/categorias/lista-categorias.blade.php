<x-layout-base>
    <x-slot:title>
        Área restrita > Lista de categorias
    </x-slot>
    <main id="listar_categorias">
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
                    <h1>LISTA DE CATEGORIAS</h1>
                    <a href="{{route('categorias.create')}}"><i class="fa-solid fa-plus"></i> Adicionar</a>
                    <div class="list-group mt-5">
                        @foreach ($categorias as $categoria)
                            <div>
                                <div>{{$categoria->nome}}</div>
                                <a href="{{route('categorias.edit',$categoria)}}"><i class="fa-solid fa-pencil"></i></a>
                                <a href="{{route('categorias.show',$categoria)}}"><i class="fa-solid fa-eye"></i></i></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout-base>