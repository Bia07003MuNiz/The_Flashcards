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
                        <form action="{{route('editar-orcamento', $orcamento)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="style__dados">
                                <div class="item__dado"><b>ID:</b> {{$orcamento->id}}</div>
                                <div class="item__dado">
                                    <b>Produtos:</b>
                                    <ul>
                                        @foreach ($orcamento->produtosOrcamentos as $produtoOrcamento)
                                            <li>{{$produtoOrcamento->Produto->nome}} ({{$produtoOrcamento->quantidade}})</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="item__dado"><b>Data:</b> {{$orcamento->dataFormatada()}}</div>
                                <div class="item__dado"><b>Status Atual:</b> {{$orcamento->statusTexto()}}</div>
                                <div class="segura__select" style="margin-bottom: 50px">
                                    <label class="item__dado" for="status"><b>Novo Status:</b> </label>
                                    <select class="sub__select" id="status" name="status">
                                        <option selected disabled>Status*</option>
                                        <option value="1">Recebido</option>
                                        <option value="2">Em andamento</option>
                                        <option value="3">Finalizado</option>
                                    </select>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-danger">Alterar status <i class="fa-solid fa-pencil"></i></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout-base>