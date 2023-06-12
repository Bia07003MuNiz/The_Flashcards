<x-layout-base>
    <x-slot:title>
        Área restrita > Edita produto
    </x-slot>
    <main id="cadastra__produto">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="{{route('lista-produtos')}}"><i class="fa-solid fa-share fa-flip-horizontal"></i> Voltar a listagem</a>
                    <h2 class="campo_titulo2">Editar produto</h2>
                    <form action="{{route('produtos.update',$produto)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{$produto->nome}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Valor</label>
                            <input type="text" class="form-control" id="valor" name="valor" value="{{$produto->valor}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Codigo externo</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" value="{{$produto->codigo}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Informações</label>
                            <textarea class="form-control" name="informacoes" id="informacoes" cols="30" rows="10">{{$produto->informacoes}}</textarea>
                        </div>
                        Categorias:
                        <div class="border">
                            @foreach (\App\Models\Categoria::all() as $categoria)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="categoria[]" value="{{$categoria->id}}" 
                                        id="categoria.{{$categoria->id}}" 
                                        {{$produto->possuiCategoria($categoria->id)?'checked':''}}
                                    >
                                    <label class="form-check-label" for="categoria.{{$categoria->id}}">
                                        {{$categoria->nome}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <button class="btn btn-success" type="submit">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layout-base>