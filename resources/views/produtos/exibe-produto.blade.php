<x-layout-base>
    <x-slot:title>
        Info de produto
    </x-slot>
    @push('scss')
        @vite(['resources/scss/teste.scss'])
    @endpush
    <div class="container">
        <h1 class="teste">PRODUTO {{$produto->nome}}</h1>

        @foreach ($produto->imagens as $imagem)
            <img src="{{$imagem->url}}" alt="" srcset="">
        @endforeach

        <h1> {{$produto->nome}}</h1>
        <h1> {{$produto->informações}}</h1>
        <h1> {{$produto->valor}}</h1>
        Categorias:
        <div>
            @foreach ($produto->categorias as $categoria)
                <p>{{$categoria->nome}}</p>
            @endforeach
        </div>
        @auth
            <a class="btn btn-danger" href="{{route('produtos.edit',$produto)}}">Editar</a>
            <a class="btn btn-danger" href="{{route('produtos.aviso',$produto)}}">Excluir</a>
        @endauth
    </div>
</x-layout-base>