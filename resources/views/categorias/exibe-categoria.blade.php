<x-layout-base>
    <x-slot:title>
        Área restrita > Categoria {{$categoria->nome}}
    </x-slot>
    <main id="exibir__categorias" class="area-restrita">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="{{route('categorias.index')}}"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar à listagem</a>
                    <div class="style__espacamento">
                        <h2 class="title__box">Dados categoria</h2>
                        <div class="posiciona__btn">
                            <a class="btn__adicionar" href="{{route('categorias.edit',$categoria)}}"><i class="fa-solid fa-pencil"></i> Editar</a>
                        </div>
                        <div class="style__dados">
                            <div class="item__dado"><b>Ordem:</b> {{$categoria->ordem}}</div>
                            <div class="item__dado"><b>Nome:</b> {{$categoria->nome}}</div>
                            <div class="item__dado"><b>Status:</b> @if($categoria->status == 1) Habilitado @elseif($categoria->status == 0) Desabilitado @endif</div>
                            <div class="item__dado"><b>Destaque:</b> @if($categoria->destaque == 1) Habilitado @elseif($categoria->destaque == 0) Desabilitado @endif</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout-base>