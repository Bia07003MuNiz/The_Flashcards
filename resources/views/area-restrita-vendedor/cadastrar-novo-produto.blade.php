<x-layout-base>
    <x-slot:title>
        Usuario
    </x-slot>
    <main id="cadastrar_novo_produto">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>


            <form class="centro" method= "POST"  action ="" > 

                <h2 class="campo_titulo2">
                    <spain> Cadastrar novo produto</spain>
                    </h2>

                <div class="row">
                        <div class="col-lg-6">
                            <div class="campo__input ">
                                <label class="sr-only" for="nome">Nome</label>
                                <input type="text" class="style__campo" placeholder="Nome" id="nome" name="nome">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="campo__input ">
                                <label class="sr-only" for="nome">Codigo</label>
                                <input type="text" class="style__campo" placeholder="Codigo" id="codigo" name="codigo">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="campo__input ">
                                <label class="sr-only" for="nome"> Categoria</label>
                                <select class="sub__select">
                                    <option>Legumes</option>
                                    <option>Carnes</option>
                                    <option>Frituras</option>
                                    <option>Massas</option>
                                    <option>Queijo</option>
                                    <option>Peixes</option>
                                    <option>Leite e derivados</option>
                                    <option>Embutidos</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="campo__input ">
                                <label class="sr-only" for="mensagem">  Informações</label>
                                    <textarea class="form-control style__campo" placeholder="Informaçôes"id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="campo__input ">
                                <label class="sr-only" for="nome"> Valor</label>
                                <input type="text" class="style__campo" placeholder="Valor" id="valor" name="valor">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="campo__input ">
                                <label for="exampleFormControlFile1" class="sr-only">  Upload de imagem</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>

                        <div class="col-lg-12">
                             <div class="campo__input ">
                                <label class="sr-only" for="nome"> Status</label>
                                <select class="sub__select">
                                    <option>Habiliado</option>
                                    <option>Desativado</option>
                                </select>
                            </div>
                        </div>
                        <div class="lim__estilo">
                            <button type=submit class="button" value="Salvar"> Salvar </button>
                        </div>
         </form>
    </div>
    </main>
</x-layout-base>