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
                                  <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                                      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                                  </a>
                                  <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                      <li><a href="#" class="nav-link px-2 text-white">THE FLASHCARDS</a></li>
                                      <li><a href="#" class="nav-link px-2 text-white"></a></li>
                                  </ul>

                                  <div class="text-end">
                                      <a href="{{ route('logout') }}"><button type="button" class="btn btn-outline-light me-2">Encerrar sessão</button></a>
                                      <button type="button" class="btn btn-warning">{{ Auth::user()->nome }}</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                  @endguest
              </div>
          
      </div>
      <p class="p-4"></p>
</header>
