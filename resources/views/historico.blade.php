<x-layout-base>
    <x-slot:title>
        Hístórico
    </x-slot>
    <h1 class="titulo">
        <span>Meu histórico </span>
    </h1>
    <main id="termos-de-uso" style="height: 450px;" >
        <div class="container">
            @if (!empty(\App\Models\Categoria::where('destaque', 1)->get()))
                <div class="container d-flex justify-content-center">
                    <div class="list-group w-50 p-3">
                        <ul class="itens__lista ">
                            @foreach (\App\Models\Categoria::where('destaque', 1)->get() as $categoria)
                                <div class="list-group">
                                    <a class="list-group-item list-group-item-action d-flex justify-content-center" href="{{ route('produtos.categoria.listar', $categoria->id) }}" title="{{ $categoria->nome }}">{{ $categoria->nome }}</a>
                                    <p></p>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>
        </div>
        <p></p>
        <div class="col order-first"></div>
        </div>
        </div>
        <p class="py-2">
        <p>
            </body>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <div class="lim__estilo d-flex justify-content-center">
            <button class="btn__salvar2 rounded btn__voltar">
                <a class="text-dark btn__voltar" style="text-decoration: none; color: black;" href="{{ route('categorias.index') }}">Voltar</a>
            </button>
        </div>
        </div>
    </main>
</x-layout-base>
