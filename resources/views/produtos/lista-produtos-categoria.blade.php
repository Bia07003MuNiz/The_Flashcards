<x-layout-base>
    <x-slot:title>
        Produtos > Categoria {{$categoria->nome}}
    </x-slot>
    <main id="lista-produtos">
        <div class="container">
            <h1 class="titulo"><span>PRODUTOS</span></h1>
            <h2 class="subtitulo">Veja nossos produtos da categoria {{$categoria->nome}}</h2>
            <div class="segura__cards">
                @foreach ($categoria->produtos as $produto)
                    @livewire('lv-card-produto', ['produto'=>$produto])
                @endforeach
            </div>
            <div class="btn__prod">
                <a class="btn__style" href="javascript:history.back()">VOLTAR</a>
            </div>
        </div>
    </main>
</x-layout-base>