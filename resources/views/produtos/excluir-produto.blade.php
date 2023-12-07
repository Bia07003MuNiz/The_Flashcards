<x-layout-base>
    <x-slot:title>
        Área restrita > Excluir produto
    </x-slot>
    {{-- <main id="exibir__categorias" class="area-restrita"> --}}
    <main id="exibir__categorias" class="area-restrita">
        <div class="container">
            <h1 class="titulo">
                <span>Excluir pergunta e resposta</span>
            </h1>
            <div class="bloco__segura mt-5">
                <div class="bloco__conteudo">
                    <div class="form-signin w-50 m-auto p-">

                        <div class="form-floating">
                            <div type="text" class="form-control">{{$produto->id}}</div>
                            <label for="floatingNome">ID</label>
                        </div><p></p>
                        <div class="form-floating">
                            <div type="text" class="form-control">{{$produto->nome}}</div>
                            <label for="floatingNome">Pergunta</label>
                        </div><p></p>
                        <div class="form-floating">
                            <div type="text" class="form-control">{{$produto->codigo}}</div>
                            <label for="floatingNome">Destaque</label>
                        </div><p></p>
                        <div class="form-floating">
                            <div type="text" class="form-control">@if($produto->destaque == 1) Habilitado @elseif($categoria->destaque == 0) Desabilitado @endif</div>
                            <label for="floatingNome">Destaque</label>
                        </div><p></p>

                        <form action="{{route('produtos.destroy', $produto)}}" class="d-flex justify-content-center"  method="POST">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger text-dark " >Confirmar exclusão <i class="fa-solid fa-trash"></i></button>
                        </form>
                        <a class="btn__voltar d-flex justify-content-center mt-3" href="{{route('criacard')}}">Voltar</a>

                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
</x-layout-base>
