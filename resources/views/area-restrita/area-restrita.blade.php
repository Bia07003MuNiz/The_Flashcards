<x-layout-base>
    <x-slot:title>
        Boas vindas
    </x-slot>
    <main id="boas-vindas">
        <div class="container">
            <h1 class="titulo"><span>Área restrita</span></h1>
            <div class="bloco__segura">
                <div class="bloco__menu">
                    <a class="menu__item @if(Request::is('meus-dados') || Request::is('alterar-senha')) active @endif" href="{{route('meus-dados')}}">Meus dados</a>
                    <a class="menu__item {{ Request::is('categorias*') ? 'active' : '' }}" href="{{route('categorias.index')}}">Categorias</a>
                    <a class="menu__item {{ Request::is('produtos*') ? 'active' : '' }}" href="{{route('produtos.index')}}">Produtos</a>
                    <a class="menu__item " href="">Relatórios produtos </a>
                    <a class="menu__item menu__item {{ Request::is('cadastre-se*') ? 'active' : '' }}" href="{{route('users.index')}}">Relatórios Cliente </a>
                    
                </div>
                <div class="bloco__conteudo">
                    <div class="saudacoes">Bem vindo(a)!</div>
                    <p>Olá @auth{{Auth::user()->nome}}@endauth, seja bem vindo(a) a <b>área restrita do vendedor</b>.</p>
                    <p>Utilize o menu lateral para navegar pela área restrita.</p>
                </div>
            </div>
        </div>
    </main>   
</x-layout-base>