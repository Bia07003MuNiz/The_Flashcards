<x-layout-base>
    <x-slot:title>
        Lista de categorias
    </x-slot>
    <div class="container">
        <h1>LISTA DE CATEGORIAS</h1>
        <a href="{{route('categorias.create')}}">Novo Categoria</a>
        <div class="list-group mt-5">
            @foreach ($categorias as $categoria)
                <a href="{{route('categorias.show',$categoria)}}" class="list-group-item list-group-item-action">{{$categoria->nome}}</a>
            @endforeach
        </div>
    </div>
</x-layout-base>