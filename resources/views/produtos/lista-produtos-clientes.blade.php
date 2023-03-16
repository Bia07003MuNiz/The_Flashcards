<x-layout-base>
    <x-slot:title>
        Lista de produtos
    </x-slot>
    <div class="container">
        <h1>LISTA DE PRODUTOS</h1>
        <a href="{{route('produtos.create')}}">Novo Produto</a>
        <div class="list-group mt-5">
            @foreach ($produtos as $produto)
                <a href="{{route('produtos.show',$produto)}}" class="list-group-item list-group-item-action">{{$produto->nome}}</a>
            @endforeach
        </div>
    </div>
</x-layout-base>