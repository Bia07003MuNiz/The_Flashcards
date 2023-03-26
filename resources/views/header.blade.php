<header id="topo"{{ Request::is('/') ? ' class=topo' : '' }}>
  <div class="box__frase">
    <div class="container">
      Seja bem vindo(a)@auth, {{Auth::user()->nome}}@endauth
    </div>
  </div>
  <div class="box__menu">
    <div class="container">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <a href="{{route('home')}}">
        <img src="assets/images/logo.png" class="img-fluid" alt="Logo" width="250" height="38">
      </a>
      <!--<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}" href="{{route('categorias.index')}}">Categorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('produtos*') ? 'active' : '' }}" href="{{route('produtos.index')}}">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('contato*') ? 'active' : '' }}" href="{{route('contato')}}">Contato</a>
              </li>
            </ul>
          </div>
          <div style="width: 40px">
            <a href="{{route('login')}}">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </a>
          </div>
          @auth
            Bem vindo(a), {{Auth::user()->nome}}
          @endauth
        </div>
      </nav>-->
    </div>
  </div>
  <!--<div class="box__categorias">
    <div class="container container__style">
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
  </div>-->
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