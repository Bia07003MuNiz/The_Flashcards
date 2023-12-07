<x-layout-base>
    <x-slot:title>
        Termos de uso
    </x-slot>
    <main id="termos-de-uso">
        <div class="container">
            <div class="titulo"><span>TERMOS</span></div>
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
                                      @include('menu-area-restrita')
                                    </div>
                                  </div>
                                @endif
        </div>


        </div>
        <p></p>
    </div>
    <div class="col order-first"></div>
</div>
</div>
<p class="py-2">
<p>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


            <div class="btn__center">
                <a href="javascript:history.back()" class="btn__style">VOLTAR</a>
            </div>
        </div>
    </main>
</x-layout-base>
