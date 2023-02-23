<x-layout-base>
    <x-slot:title>
        Info de produto
    </x-slot>

    @push('scss')
        @vite(['resources/scss/teste.scss'])
    @endpush

    <h1 class="teste">PRODUTO {{$produto->nome}}</h1>
    <h1> {{$produto->nome}}</h1>
    <h1> {{$produto->informações}}</h1>
    <h1> {{$produto->valor}}</h1>

    Categorias:
    <div>
        @foreach ($produto->categorias as $categoria)
            <p>{{$categoria->nome}}</p>
        @endforeach
    </div>


    <a class="btn btn-danger" href="{{route('produtos.edit',$produto)}}">Editar</a>
    <a class="btn btn-danger" href="{{route('produtos.aviso',$produto)}}">Excluir</a>


</x-layout-base>