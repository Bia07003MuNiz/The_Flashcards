<x-layout-base>
    <x-slot:title>
        Produtos
    </x-slot>
    <main id="produtos-area-restrita" class="area-restrita">
        <div class="container">
            <h1 class="titulo"><span>Área restrita</span></h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <div class="style__espacamento">
                        <h2 class="title__box">Lista de produtos</h2>
                        <div class="posiciona__btn">
                            <a class="btn__adicionar" href="{{route('produtos.create')}}"><i class="fa-solid fa-plus"></i> Adicionar</a>
                        </div>
                        <div class="table__categorias">
                            @foreach ($produtos as $produto)
                                <div class="listagem__categorias">
                                    <div>{{$produto->id}}</div>
                                    <div>{{$produto->nome}}</div>
                                    <div>R$ {{number_format($produto->valor, 2, ',','.')}}</div>
                                    <div class="btn__edicao">
                                        <a href="{{route('produtos.edit',$produto)}}"><i class="fa-solid fa-pencil"></i></a>
                                        <a href="{{route('produtos.aviso',$produto)}}"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout-base>