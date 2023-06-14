<x-layout-base>
    <x-slot:title>
        Área restrita > Relatórios
    </x-slot>
    <main id="relatorios__vendedor"  class="area-restrita relatorios">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="javascript:history.back()"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar</a>
                    <div class="style__espacamento">
                        @include('menu-relatorios')
                        <br>
                        <p><b>@auth{{Auth::user()->nome}}@endauth</b>, selecione em "Ver relatório de" para poder visualizar o relatório desejado.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout-base>