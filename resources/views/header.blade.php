<header id="topo">
  <div class="box__frase">
    <div class="container">
      Seja bem vindo(a)@auth, {{Auth::user()->nome}}@endauth
    </div>
  </div>
  <div class="box__menu">
    <div class="container container__style">
      <div class="dropdown">
        <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="assets/svg/menu.svg" width="45" height="40" alt="Ícone menu">
        </button>
        <div class="dropdown-menu dropdown__style" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item item__style {{ Request::is('/') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
          <a class="dropdown-item item__style {{ Request::is('quem-somos') ? 'active' : '' }}" href="{{route('quem-somos')}}">Quem somos</a>
          <a class="dropdown-item item__style {{ Request::is('categorias*') ? 'active' : '' }}" href="{{route('categorias.index')}}">Categorias</a>
          <a class="dropdown-item item__style {{ Request::is('produtos*') ? 'active' : '' }}" href="{{route('produtos.index')}}">Produtos</a>
          <a class="dropdown-item item__style {{ Request::is('onde-estamos') ? 'active' : '' }}" href="{{route('onde-estamos')}}">Localização</a>
          <a class="dropdown-item item__style {{ Request::is('contato') ? 'active' : '' }}" href="{{route('contato')}}">Contato</a>
        </div>
      </div>
      <a href="{{route('home')}}">
        <img src="assets/images/logo.png" class="img-fluid" alt="Logo" width="250" height="38">
      </a>
      <div class="main__lateral">
        @auth
          <div class="dropdown">
            <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Área restrita
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
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
            <form>
              <div class="campo__input">
                  <label for="busca">O que esta buscando:</label>
                  <input type="text" placeholder="XXXXXX XXXXXXX" id="busca" name="busca">
              </div>
              <button type="submit" class="button" value="Enviar">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </div>
        <a class="box__carrinho" href="{{route('carrinho')}}">
          <i class="fa-solid fa-cart-shopping"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="box__categorias">
      <ul class="itens__lista">
        @foreach (\App\Models\Categoria::all() as $categoria)
          <li class="item">
            <a href="{{route('categorias.show', $categoria->id)}}" title="{{$categoria->nome}}">{{$categoria->nome}}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</header>