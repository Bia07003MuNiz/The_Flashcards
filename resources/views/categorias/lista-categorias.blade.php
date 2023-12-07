<x-layout-base>
    <x-slot:title>
        Meus flashcards
    </x-slot>
    <main id="listar__categorias" class="area-restrita" >
        <h1 class="titulo"><span>Bem vindo(a) <p></p> {{ Auth::user()->nome }}</span></h1>
        <div class="d-grid gap-2 col-6 rounded-pill mx-auto position-relative py-5 px-4">
            <a href="{{ route('criacard') }}" class="btn btn-primary rounded-pill " role="button"
                aria-disabled="true">CRIAR FLASHCARDS </a>
        </div>
        <div class=" d-flex justify-content-center my-5">
            @if (!empty(\App\Models\Categoria::where('destaque', 1)->get()))
                <div>
                    <div>
                        @foreach (\App\Models\Categoria::where('destaque', 1)->get() as $categoria)
                            <div class="container_cards2 my-5 mx-auto">
                                <form class="form_cards">
                                    <p class="form-title top-0 start-0">
                                        {{ $categoria->id }}
                                        <a href="{{ route('categorias.edit', $categoria) }}" style="position: relative; left:910px;"><i class="fa-solid fa-pencil text-black"></i></a>
                                        <a href="{{ route('categorias.show', $categoria) }}" style="position: relative; left:920px;"><i class="fa-solid fa-eye text-black"></i></a>
                                    </p>
                                    <div class="input-container">
                                        <h2 class="flash2"><a title="{{ $categoria->nome }}">{{ $categoria->nome }}</a>
                                        </h2>

                                    </div>
                                    <div class="input-container">
                                        <div class="d-grid w-25 p-3 mx-auto position-relative " data-toggle="modal" data-target="#exampleModalCenter">
                                            <a href="{{ route('produtos.categoria.listar', $categoria->id) }}"
                                                class="btncard text-center text-dark" role="button" aria-disabled="true"> Estudar agora
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </main>
</x-layout-base>
