<x-layout-base>
    <x-slot:title>
        Área restrita > Lista de categorias
    </x-slot>
    <main id="listar__categorias" class="area-restrita">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <div class="style__espacamento">
                        <h2 class="title__box">Lista de categorias</h2>
                        <div class="posiciona__btn">
                            <a class="btn__adicionar" href="{{route('categorias.create')}}"><i class="fa-solid fa-plus"></i> Adicionar</a>
                        </div>
                        <div class="table__categorias">
                            @foreach ($categorias as $categoria)
                                <div class="listagem__categorias">
                                    <div>{{$categoria->ordem}}</div>
                                    <div>{{$categoria->nome}}</div>
                                    <div class="btn__edicao">
                                        <a href="{{route('categorias.edit',$categoria)}}"><i class="fa-solid fa-pencil"></i></a>
                                        <a href="{{route('categorias.show',$categoria)}}"><i class="fa-solid fa-eye"></i></i></a>
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