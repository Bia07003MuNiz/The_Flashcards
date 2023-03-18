<x-layout-base>
    <x-slot:title>
        Cadastro de produtos
    </x-slot>
    <div class="container">
        <h1>Cadastro</h1>
        <form action="{{route('produtos.store')}}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Código externo</label>
                <input type="text" class="form-control" id="codigo" name="codigo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Informações</label>
                <textarea class="form-control" name="informacoes" id="informacoes" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="arquivo" class="form-label">Imagens</label>
                <input type="file" multiple class="form-control" id="arquivo" name="arquivo[]">
            </div>
            Categorias:
            <div class="border">
                @foreach (\App\Models\Categoria::all() as $categoria)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categoria[]" value="{{$categoria->id}}" id="categoria.{{$categoria->id}}">
                        <label class="form-check-label" for="categoria.{{$categoria->id}}">
                            {{$categoria->nome}}
                        </label>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-success" type="submit">Salvar</button>
        </form>
    </div>
</x-layout-base>