<x-layout-base>
    <x-slot:title>
        Boas vindas
    </x-slot>
    <main id="boas-vindas" class="area-restrita">
        <div class="container">
            <h1 class="titulo"><span>Área restrita</span></h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <div class="saudacoes">Bem vindo(a)!</div>
                    <p>Olá @auth{{Auth::user()->nome}}@endauth, seja bem vindo(a) a <b>área restrita do vendedor</b>.</p>
                    <p>Utilize o menu lateral para navegar pela área restrita.</p>
                </div>
            </div>
        </div>
    </main>   
</x-layout-base>