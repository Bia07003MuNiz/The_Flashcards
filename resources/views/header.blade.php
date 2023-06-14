<header id="topo">
  <div class="box__frase">
    <div class="container">
      <div class="frase__alinhamento">
        <div>
          @auth
            @if(auth()->user()->tipo == 0)
              Seja bem vindo(a) {{Auth::user()->nome}}
            @elseif(auth()->user()->tipo == 1)
              Seja bem vindo(a)@auth vendedor(a) {{Auth::user()->nome}}@endauth
            @endif
          @else
            Seja bem vindo(a)
          @endauth
        </div>
        @auth
          <a href="{{route('logout')}}">Encerrar sessão <i class="fa-solid fa-right-from-bracket"></i></a>
        @endauth
      </div>
    </div>
  </div>
  <div class="box__menu">
    <div class="container container__style">
      <div class="dropdown">
        <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="http://127.0.0.1:8000/assets/svg/menu.svg" width="45" height="40" alt="Ícone menu">
        </button>
        <div class="dropdown-menu dropdown__style" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item item__style {{ Request::is('/') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
          <a class="dropdown-item item__style {{ Request::is('quem-somos') ? 'active' : '' }}" href="{{route('quem-somos')}}">Quem somos</a>
          <a class="dropdown-item item__style {{ Request::is('produtos') ? 'active' : '' }}" href="{{route('produtos.index')}}">Produtos</a>
          <a class="dropdown-item item__style {{ Request::is('onde-estamos') ? 'active' : '' }}" href="{{route('onde-estamos')}}">Localização</a>
          <a class="dropdown-item item__style {{ Request::is('contato') ? 'active' : '' }}" href="{{route('contato')}}">Contato</a>
        </div>
      </div>
      <a href="{{route('home')}}">
        <img src="http://127.0.0.1:8000/assets/images/logo.png" class="img-fluid" alt="Logo" width="250" height="38">
      </a>
      <div class="main__lateral">
        @auth
          @if(auth()->user()->tipo == 0)
            <div class="dropdown box__logado">
              <button class="btn" type="button" id="optionsRestritoCliente" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-user"></i>
              </button>
              <div class="dropdown-menu dropdownRestritoCliente" aria-labelledby="optionsRestrito">
                <a class="dropdown-item {{ Request::is('users/'.auth()->user()->id.'/edit') ? 'active' : '' }}" href="{{route('users.edit',auth()->user()->id)}}">Meus dados</a>
                <a class="dropdown-item {{ Request::is('') ? 'active' : '' }}" href="{{route('pedidos-periodo-cliente')}}">Pedidos realizados</a>
              </div>
            </div>
          @elseif(auth()->user()->tipo == 1)
            <div class="dropdown box__logado">
              <button class="btn" type="button" id="optionsRestrito" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-user"></i>
              </button>
              <div class="dropdown-menu dropdownRestrito" aria-labelledby="optionsRestrito">
                <a class="dropdown-item {{ Request::is('users/'.auth()->user()->id.'/edit') ? 'active' : '' }}" href="{{route('users.edit',auth()->user()->id)}}">Meus dados</a>
                <a class="dropdown-item {{ Request::is('categorias*') ? 'active' : '' }}" href="{{route('categorias.index')}}">Categorias</a>
                <a class="dropdown-item {{ Request::is('produtos*') && !Request::is('produtos') || Request::is('admin/lista-produtos') ? 'active' : '' }}" href="{{route('lista-produtos')}}">Produtos</a>
                <a class="dropdown-item {{ Request::is('relatorios') || Request::is('pedidos-periodo') || Request::is('') || Request::is('users') || Request::is('admin/produtos-cadastrados') ? 'active' : '' }}" href="{{route('relatorios')}}">Relatórios</a>
              </div>
            </div>
          @endif
        @else
          <div class="box__login">
            <div class="segura__links">
              <div>
                <a href="{{route('login')}}">Faça login</a>
                <span>ou</span>
              </div>
              <a href="{{route('cadastre-se')}}">cadastre-se</a>
            </div>
            <a href="{{route('login')}}"><i class="fa-solid fa-user"></i></a>
          </div>
        @endauth
        <div class="btn-group dropleft box__pesquisa">
          <button type="button" class="btn btn__pesquisa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
          <div class="dropdown-menu" id="form__pesquisa">
            <form method="POST" action="{{route('produtos.pesquisar')}}">
              @csrf
              <div class="campo__input">
                  <label for="busca" class="label__titulo">O que esta buscando:</label>
                  <input type="text" class="campo__pesquisa" id="busca" name="busca">
              </div>
              <button type="submit" class="btn__busca__style" value="Enviar">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </div>
        @auth
          <a class="btn box__carrinho" href="{{route('carrinho')}}">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
        @else
          <button type="button" class="btn box__carrinho" data-toggle="tooltip" data-placement="bottom" title="Faça login ou cadastre-se para poder ter acesso ao carrinho">
            <i class="fa-solid fa-cart-shopping"></i>
          </button>
        @endauth
      </div>
    </div>
  </div>
  @if(!empty(\App\Models\Categoria::where('destaque',1)->get()))
    <div class="container">
      <div class="box__categorias">
        <ul class="itens__lista">
          @foreach (\App\Models\Categoria::where('destaque',1)->get() as $categoria)
            <li class="item">
              <a href="{{route('produtos.categoria.listar', $categoria->id)}}" title="{{$categoria->nome}}">{{$categoria->nome}}</a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  @endif
</header>