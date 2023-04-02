<header id="topo">
  <div class="box__frase">
    <div class="container">
      Seja bem vindo(a)@auth, {{Auth::user()->nome}}@endauth
    </div>
  </div>
  <div class="box__menu">
    <div class="container container__style">
      <div class="main__menu">
				<button class="btn" data-toggle="collapse" data-target="#menu__drop" aria-expanded="false">
          <img src="assets/svg/menu.svg" width="45" height="40" alt="Ícone menu">
        </button>
        <ul class="categorias__drop collapse" id="menu__drop">
          <li class="categoria__item {{ Request::is('/') ? 'active' : '' }}">
            <a class="dropdown-item" href="{{route('home')}}">Home</a>
          </li>
          <li class="categoria__item {{ Request::is('quem-somos') ? 'active' : '' }}">
            <a class="dropdown-item" href="{{route('quem-somos')}}">Quem somos</a>
          </li>
          <li class="categoria__item {{ Request::is('categorias*') ? 'active' : '' }}">
            <a class="dropdown-item" href="{{route('categorias.index')}}">Categorias</a>
          </li>
          <li class="categoria__item {{ Request::is('produtos*') ? 'active' : '' }}">
            <a class="dropdown-item" href="{{route('produtos.index')}}">Produtos</a>
          </li>
          <li class="categoria__item {{ Request::is('onde-estamos') ? 'active' : '' }}">
            <a class="dropdown-item" href="{{route('onde-estamos')}}">Localização</a>
          </li>
          <li class="categoria__item {{ Request::is('contato') ? 'active' : '' }}">
            <a class="dropdown-item" href="{{route('contato')}}">Contato</a>
          </li>
        </ul>
			</div>
      <a href="{{route('home')}}">
        <img src="assets/images/logo.png" class="img-fluid" alt="Logo" width="250" height="38">
      </a>
      <div class="main__lateral">
        <div>
          <a href="{{route('login')}}">Faça login</a> ou <a href="{{route('login')}}">cadastre-se</a>
          <i class="fa-solid fa-user"></i>
        </div>
        <button class="btn" data-toggle="collapse" data-target="#form__drop" aria-expanded="false">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <form id="form__drop">
        </form>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>
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