<header id="topo">
  <div class="box__frase">
    <div class="container">
      Seja bem vindo(a)@auth, {{Auth::user()->nome}}@endauth
    </div>
  </div>
  <div class="box__menu">
    <div class="container">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
          <a class="dropdown-item {{ Request::is('quem-somos') ? 'active' : '' }}" href="{{route('quem-somos')}}">Quem somos</a>
          <a class="dropdown-item {{ Request::is('categorias*') ? 'active' : '' }}" href="{{route('categorias.index')}}">Categorias</a>
          <a class="dropdown-item {{ Request::is('produtos*') ? 'active' : '' }}" href="{{route('produtos.index')}}">Produtos</a>
          <a class="dropdown-item {{ Request::is('onde-estamos') ? 'active' : '' }}" href="{{route('onde-estamos')}}">Localização</a>
          <a class="dropdown-item {{ Request::is('contato') ? 'active' : '' }}" href="{{route('contato')}}">Contato</a>
        </div>
      </div>
      <a href="{{route('home')}}">
        <img src="assets/images/logo.png" class="img-fluid" alt="Logo" width="250" height="38">
      </a>
      <div>
        <a href="{{route('login')}}">Faça login</a> ou <a href="{{route('login')}}">cadastre-se</a>
        <i class="fa-solid fa-user"></i>
      </div>
      <i class="fa-solid fa-magnifying-glass"></i>
      <i class="fa-solid fa-cart-shopping"></i>
    </div>
  </div>
  <div class="container">
    <div class="box__categorias">
      <ul class="itens__lista">
        <li class="item">
          <a href="#" title="Legumes">Legumes</a>
        </li>
        <li class="item">
          <a href="#" title="Carnes">Carnes</a>
        </li>
        <li class="item">
          <a href="#" title="Frituras">Frituras</a>
        </li>
        <li class="item">
          <a href="#" title="Massas">Massas</a>
        </li>
        <li class="item">
          <a href="#" title="Queijos">Queijos</a>
        </li>
        <li class="item">
          <a href="#" title="Leites e derivados">Leites e derivados</a>
        </li>
        <li class="item">
          <a href="#" title="Embutidos">Embutidos</a>
        </li>
        <li class="item">
          <a href="#" title="Peixes">Peixes</a>
        </li>
      </ul>
    </div>
  </div>
</header>