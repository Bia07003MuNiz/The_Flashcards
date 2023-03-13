<x-layout-base>
    <x-slot:title>
        Cadastro de categorias
    </x-slot>
    <div class="container">
        <h1>Cadastro</h1>
        <form action="{{route('categorias.store')}}" method="POST">
            @method('POST')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <button class="btn btn-success" type="submit">Salvar</button>
        </form>
    </div>
</x-layout-base>