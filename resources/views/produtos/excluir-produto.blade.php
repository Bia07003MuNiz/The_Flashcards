<x-layout-base>
    <x-slot:title>
        Excluir de produto
    </x-slot>
    @push('scss')
        @vite(['resources/scss/teste.scss'])
    @endpush
    <div class="container">
        <h1 class="teste">EXCLUIR {{$produto->nome}}</h1>
        <h1> {{$produto->nome}}</h1>
        <h1> {{$produto->informações}}</h1>
        <h1> {{$produto->valor}}</h1>
        Categorias:
        <div>
            @foreach ($produto->categorias as $categoria)
                <p>{{$categoria->nome}}</p>
            @endforeach
        </div>
        
        <form action="{{route('produtos.destroy', $produto)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Confirmar excluir</button>
        </form>
    </div>
</x-layout-base>