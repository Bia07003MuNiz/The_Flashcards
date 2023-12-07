<x-layout-base>
    <x-slot:title>
        login
    </x-slot>
<div class="container Login" style="height: 750px">
    <link href="{{ asset('css/flashcards.css') }}"  rel="stylesheet">
 <h1 class="p-5"> "JUNTE AS SILÁBAS "</h1>
        <div class="row">
          <div class="col-sm">
          </div>
          <div class="col-sm">
            <div class="card2 text-center">
                <div class="card-inner">
                  <div class="card-front">
                    <p>MA-CA-CO</p>
                  </div>
                  <div class="card-back">
                    <p>MACACO</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-sm">

          </div>
        </div>
        <div>
            <a href="#"><img src="icones/errado2.png" class="errado" > </a>
            <a href="#"><img src="icones/certo2.png" class="certo" > </a>
        </div>
        <div class="d-flex justify-content-center mt-5">
          <button type="button" class="btn btn-link"><a href="/"> voltar</button>
          </div>
        </div>

</html></x-layout-base>

