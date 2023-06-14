<div class="bloco__menu">
    @auth
        <a class="menu__item {{ Request::is('users/'.auth()->user()->id.'/edit') ? 'active' : '' }}" href="{{route('users.edit',auth()->user()->id)}}">Meus dados</a>
        @if(auth()->user()->tipo == 0)
            <a class="menu__item {{ Request::is('') ? 'active' : '' }}" href="{{route('pedidos-periodo-cliente')}}">Meus pedidos</a>
        @elseif(auth()->user()->tipo == 1)
            <a class="menu__item {{ Request::is('categorias*') ? 'active' : '' }}" href="{{route('categorias.index')}}">Categorias</a>
            <a class="menu__item {{ Request::is('produtos*') || Request::is('admin/lista-produtos') ? 'active' : '' }}" href="{{route('lista-produtos')}}">Produtos</a>
            <a class="menu__item {{ Request::is('relatorios') || Request::is('pedidos-periodo') || Request::is('contatos-periodo') || Request::is('users') || Request::is('admin/produtos-cadastrados') ? 'active' : '' }}" href="{{route('relatorios')}}">Relatórios</a>
        @endif
    @endauth    
</div>