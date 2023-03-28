<x-layout-base>
    <x-slot:title>
        Info de produto
    </x-slot>
    @push('scss')
        @vite(['resources/scss/teste.scss'])
    @endpush
    <div class="container ">
    <div class="row">
    <div class="col-xl-5 col-lg-3">
    </div>
    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex aling-items-stretch">
        <div class="card text-center bg-light">
        <h1 class="teste">{{$produto->nome}}</h1>

        @foreach ($produto->imagens as $imagem)
            <img src="{{$imagem->url}}"  classe="card-img-top">
        @endforeach

        
        <h1> {{$produto->informações}}</h1>
        <h1> {{$produto->valor}}</h1>
        Categorias:
        <div>
            @foreach ($produto->categorias as $categoria)
                <p>{{$categoria->nome}}</p>
            @endforeach
            <br>
        </div>
        @auth
            <a class="btn btn-danger" href="{{route('produtos.edit',$produto)}}">Editar</a>
            <a class="btn btn-danger" href="{{route('produtos.aviso',$produto)}}">Excluir</a>
        @endauth
    </div>
    
</div>
</div>
</div>
</x-layout-base>