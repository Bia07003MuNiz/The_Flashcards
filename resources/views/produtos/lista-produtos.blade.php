<x-layout-base>
    <x-slot:title>
        Lista de produtos
    </x-slot>
    
    <main id="lista-produtos">
        <div class="container">
            <h1 class="titulo"><span>NOSSOS PRODUTOS</span></h1>
            @auth
                <a href="{{route('produtos.create')}}">Novo Produto</a>
            @endauth
            <div class="segura__cards">
                @foreach ($produtos as $produto)
                    @livewire('lv-card-produto', ['produto'=>$produto])
                @endforeach
            </div>
            <div class="btn">
                <a class="btn__style" href="javascript:history.back()">VOLTAR</a>
            </div>
        </div>
    </main>
</x-layout-base>