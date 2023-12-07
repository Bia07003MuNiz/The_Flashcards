<header id="topo">
  <div class="box__frase">
          <div class="frase__alinhamento">
                  @guest
                      <div class="p-3 text-bg-dark">
                          <div class="container">
                              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                                  <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                                      <svg class="bi me-2" width="40" height="32" role="img" aria-label="teste"><use xlink:href="#teste"/></svg>
                                  </a>
                                  <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                      <li><a href="#" class="nav-link px-2 text-white">THE FLASHCARDS</a></li>
                                      <li><a href="#" class="nav-link px-2 text-white"></a></li>
                                  </ul>

                                  <div class="text-end">
                                      <a href="/login"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
                                      <a href="/cadastre-se"><button type="button" class="btn btn-warning">Cadastre-se</button></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @else
                      <div class="p-3 text-bg-dark">
                          <div class="container">
                              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                                  <a href="{{ route('categorias.index') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="teste"><use xlink:href="#teste"/></svg>
                                </a>
                                  <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                      <li><a href="#" class="nav-link px-2 text-white">THE FLASHCARDS</a></li>
                                      <li><a href="#" class="nav-link px-2 text-white"></a></li>
                                  </ul>
                                  <div class="text-end">
                                      <a href="{{ route('logout') }}"><button type="button" class="btn btn-outline-light me-2">Encerrar sessão</button></a>
                                      <button type="button" class="btn btn-warning">{{ Auth::user()->nome }}</button>
                                  </div>
                                  <div class="dropdown">
                                    <div class="mt-2 mx-2" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="bi text-white" width="40px" height="40px" viewBox="0 0 50 50">
                                            <path d="M 5 8 A 2.0002 2.0002 0 1 0 5 12 L 45 12 A 2.0002 2.0002 0 1 0 45 8 L 5 8 z M 5 23 A 2.0002 2.0002 0 1 0 5 27 L 45 27 A 2.0002 2.0002 0 1 0 45 23 L 5 23 z M 5 38 A 2.0002 2.0002 0 1 0 5 42 L 45 42 A 2.0002 2.0002 0 1 0 45 38 L 5 38 z"/>
                                        </svg>                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" {{ Request::is('users/'.auth()->user()->id.'/edit') ? 'active' : '' }}" href="{{route('users.edit',auth()->user()->id)}}">Meus dados</a>
                                    <a class="dropdown-item  item__style {{ Request::is('historico') ? 'active' : '' }}" href="{{route('historico')}}">Ver histórico</a>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                  @endguest
              </div>
      </div>

</header>
