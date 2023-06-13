<x-layout-base>
    <x-slot:title>
        Área restrita > Excluir produto
    </x-slot>
    <main id="exibir__categorias" class="area-restrita">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="{{route('lista-produtos')}}"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar à listagem</a>
                    <div class="style__espacamento">
                        <h2 class="title__box">Dados produto</h2>
                        <div class="posiciona__btn">
                            <a class="btn__adicionar" href="{{route('produtos.edit', $produto)}}"><i class="fa-solid fa-pencil"></i> Editar</a>
                        </div>
                        <div class="style__dados">
                            <div class="item__dado"><b>ID:</b> {{$produto->id}}</div>
                            <div class="item__dado"><b>Nome:</b> {{$produto->nome}}</div>
                            <div class="item__dado"><b>Informações:</b> {{$produto->informações}}</div>
                            <div class="item__dado"><b>Valor:</b> R$ {{number_format($produto->valor, 2, ',','.')}}</div>
                            <div class="item__dado">
                                <b>Categorias:</b>
                                <ul>
                                    @foreach ($produto->categorias as $categoria)
                                        <li>{{$categoria->nome}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="item__dado">
                                <b>Imagens:</b>
                                <ul>
                                    @foreach ($produto->imagens as $imagem)
                                        <li><img src="{{$imagem->url}}" width="100" height="100" class="img-fluid" loading="lazy"></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="item__dado"><b>Status:</b> {{$produto->status}}</div>
                            <div class="item__dado"><b>Destaque:</b> {{$produto->destaque}}</div>
                        </div>
                        <form action="{{route('produtos.destroy', $produto)}}" method="POST">
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