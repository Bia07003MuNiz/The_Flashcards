<div class="bloco__menu">
    @auth
        <a class="menu__item {{ Request::is('users*') ? 'active' : '' }}" href="{{route('users.edit',auth()->user()->id)}}">Meus dados</a>
        @if(auth()->user()->tipo == 0)
            <a class="menu__item " href="">Meus pedidos</a>
        @elseif(auth()->user()->tipo == 1)
            <a class="menu__item {{ Request::is('categorias*') ? 'active' : '' }}" href="{{route('categorias.index')}}">Categorias</a>
            <a class="menu__item {{ Request::is('produtos*') || Request::is('lista-produtos') ? 'active' : '' }}" href="{{route('lista-produtos')}}">Produtos</a>
            <a class="menu__item {{ Request::is('relatorios') ? 'active' : '' }}" href="{{route('relatorios')}}">Relatórios</a>
        @endif
    @endauth    
</div>