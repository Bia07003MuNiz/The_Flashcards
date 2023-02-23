<x-layout-base>
    <x-slot:title>
        Edita categoria
    </x-slot>

    <h1>Editar categoria</h1>

    <form action="{{route('categorias.update',$categoria)}}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$categoria->nome}}">
        </div>

        <button class="btn btn-success" type="submit">Salvar</button>


    </form>


</x-layout-base>