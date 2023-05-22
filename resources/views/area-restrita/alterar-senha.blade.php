<x-layout-base>
    <x-slot:title>
        Área restrita > Alterar senha
    </x-slot>
    <main id="alterar-senha">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                <div class="bloco__menu">
                    <a class="menu__item @if(Request::is('meus-dados') || Request::is('alterar-senha')) active @endif" href="{{route('meus-dados')}}">Meus dados</a>
                    <a class="menu__item {{ Request::is('categorias*') ? 'active' : '' }}" href="{{route('categorias.index')}}">Categorias</a>
                    <a class="menu__item {{ Request::is('produtos*') ? 'active' : '' }}" href="{{route('produtos.index')}}">Produtos</a>
                    <a class="menu__item " href="">Relatórios</a>
                </div>
                <div class="bloco__conteudo">
                    <form class="centro" method= "POST"  action ="" >
                        <div class="centro_inicio"> 
                            <h2 class="campo_titulo2">
                                <span> Alterar senha </sapn>
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="campo__input ">
                                    <label class="sr-only" for="nome">Senha atual:</label>
                                    <input type="password" class="style__campo" placeholder="Senha atual:" id="senha atual" name="senha atual">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="campo__input ">
                                    <label class="sr-only" for="nome">Nova senha:</label>
                                    <input type="password" class="style__campo" placeholder="Nova senha:" id="nova senha" name="nova senha">
                                </div>
                            </div>        
                            <div class="col-lg-6">
                                <div class="campo__input ">
                                    <label class="sr-only" for="nome">Confirme nova senha:</label>
                                    <input type="password" class="style__campo" placeholder="Confirmar nova senha:" id="confirmar nova senha" name="confirmar nova senha">
                                </div>
                            </div>
                            <div class="lim__estilo">
                                <button type=submit class="button" value="Salvar"> Salvar </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>   
</x-layout-base>