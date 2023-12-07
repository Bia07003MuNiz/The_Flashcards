<div class="card__produto">
    <div class="card__produto__style">



    <div class="container Login" style="height: 750px">
        <link href="{{ asset('css/flashcards.css') }}"  rel="stylesheet">
            <div class="row">
              <div class="col-sm">
              </div>
              <div class="col-sm">
                <div class="card2">
                    <div class="card-inner">
                      <div class="card-front">
                        <p> {{ $produto->nome }}</p>
                      </div>
                      <div class="card-back">
                        <p>{{ $produto->codigo }}</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-sm">

              </div>
            </div>
            <div class="d-flex bd-highlight mb-3">

                <div class="certo1">
                    <svg class="pr-5" fill="#40C057" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="88px" height="88px"><path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21.707,12.707l-7.56,7.56 c-0.188,0.188-0.442,0.293-0.707,0.293s-0.52-0.105-0.707-0.293l-3.453-3.453c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0 l2.746,2.746l6.853-6.853c0.391-0.391,1.023-0.391,1.414,0S22.098,12.316,21.707,12.707z"/></svg>

                </div>

                <div class="errado1">
                    <svg fill="#FA5252" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="75px" height="75px"><path d="M25,2C12.319,2,2,12.319,2,25s10.319,23,23,23s23-10.319,23-23S37.681,2,25,2z M33.71,32.29c0.39,0.39,0.39,1.03,0,1.42	C33.51,33.9,33.26,34,33,34s-0.51-0.1-0.71-0.29L25,26.42l-7.29,7.29C17.51,33.9,17.26,34,17,34s-0.51-0.1-0.71-0.29	c-0.39-0.39-0.39-1.03,0-1.42L23.58,25l-7.29-7.29c-0.39-0.39-0.39-1.03,0-1.42c0.39-0.39,1.03-0.39,1.42,0L25,23.58l7.29-7.29	c0.39-0.39,1.03-0.39,1.42,0c0.39,0.39,0.39,1.03,0,1.42L26.42,25L33.71,32.29z"/></svg>

                </div>
            </div>


              <div>
            </div>
            </div>
    @push('adicionaCarrinho')
        @once
            <script>
                function pushTest() {
                    $('.toast').toast('show');
                }
            </script>
    </div>
        @endonce
    @endpush
</div>
