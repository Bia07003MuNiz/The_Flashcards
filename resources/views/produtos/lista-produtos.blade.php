<x-layout-base>
    <x-slot:title>
        Lista de produtos
    </x-slot>
    <main>
        <div class="container">
            <h1 class="titulo"><span>NOSSOS PRODUTOS</span></h1>
            @auth
                <a href="{{route('produtos.create')}}">Novo Produto</a>
            @endauth
            <div class="row">
                @foreach ($produtos as $produto)
                    @livewire('lv-card-produto', ['produto'=>$produto])
                @endforeach
            </div>
            <nav class="d-inline-block">
                <ul class="pagination pagination-sm my-0">
                    <li class="page-item">
                        <button class="page-link">1</button>
                    </li>
                    <li class="page-item">
                        <button class="page-link">2</button>
                    </li>
                    <li class="page-item">
                        <button class="page-link ">3</button>
                    </li>
                    <li class="page-item">
                        <button class="page-link">4</button>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
</x-layout-base>