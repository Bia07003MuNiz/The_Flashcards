<x-layout-base>
    <x-slot:title>
        Usuario
    </x-slot>
    <main id="cadastrar_nova_categoria">
        <div class="container">

            <h1 class="titulo">
                <span> Área restrita </span>
            </h1>

            <form class="centro" method= "POST"  action ="" >

                <h2 class="campo_titulo2">
                   <span> Cadastrar nova categoria </span>
                </h2>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="campo__input ">
                            <label class="sr-only" for="nome">Ordem:</label>
                            <input type="text" class="style__campo" placeholder="Ordem" id="ordem" name="ordem">
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="campo__input ">
                            <label class="sr-only" for="nome">Nome:</label>
                            <input type="text" class="style__campo" placeholder="Nome" id="nome" name="nome">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="campo__input ">
                            <label class="sr-only" for="nome"> Status:</label>
                            <select class="sub__select">
                                <option>Habilitado</option>
                                <option>Desabilitado</option>
                            </select>
                        </div>
                    </div>
                </div>

                
                <div class="lim__estilo">
                    <button type=submit class="button" value="Salvar"> Salvar </button>
                </div>
            </form>
        </div>
    </main>
</x-layout-base>