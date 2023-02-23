<x-layout-base>
    <x-slot:title>
        Info de categoria
    </x-slot>
    <div>
        <h1 class="teste">CATEGORIA {{$categoria->nome}}</h1>
        <h1> {{$categoria->nome}}</h1>

        <a class="btn btn-danger" href="{{route('categorias.edit',$categoria)}}">Editar</a>
    </div>
</x-layout-base>