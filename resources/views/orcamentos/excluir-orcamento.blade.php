<x-layout-base>
    <x-slot:title>
        Área restrita > Excluir Orcamento
    </x-slot>
    <main id="exibir__categorias" class="area-restrita">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="{{route('pedidos-periodo')}}"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar à listagem</a>
                    <div class="style__espacamento">
                        <h2 class="title__box">Dados do Orcamento</h2>
                        <div class="style__dados">
                            <div class="item__dado"><b>ID:</b> {{$orcamento->id}}</div>
                            <div class="item__dado"><b>Status:</b> {{$orcamento->statusTexto()}}</div>
                            <div class="item__dado">
                                <b>Produtos:</b>
                                <ul>
                                    @foreach ($orcamento->produtosOrcamentos as $produtoOrcamento)
                                        <li>{{$produtoOrcamento->Produto->nome}} ({{$produtoOrcamento->quantidade}})</li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="item__dado"><b>Data:</b> {{$orcamento->dataFormatada()}}</div>
                        </div>
                        <form action="{{route('excluir-orcamento', $orcamento)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Confirmar exclusão <i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout-base>