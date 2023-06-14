<div class="row menu__relatorio">
    <div class="col-lg-6">
        <h2 class="title__box">Relatórios</h2>
    </div>
    <div class="col-lg-6">
        <div class="dropdown">
            <button class="btn__drop__opcoes dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ver relatório de:
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item {{ Request::is('pedidos-periodo') ? 'active' : '' }}" href="{{route('pedidos-periodo')}}">Pedidos/Orçamentos</a>
                <a class="dropdown-item" href="{{route('contatos-periodo')}}">Solicitações de contato</a>
                <a class="dropdown-item {{ Request::is('users') ? 'active' : '' }}" href="{{route('users.index')}}">Clientes cadastrados</a>
                <a class="dropdown-item {{ Request::is('produtos-cadastros') ? 'active' : '' }}" href="{{route('produtos-cadastros')}}">Produtos cadastrados</a>
            </div>
        </div>
    </div>
</div>