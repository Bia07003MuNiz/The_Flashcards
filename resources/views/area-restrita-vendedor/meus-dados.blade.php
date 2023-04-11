<x-layout-base>
    <x-slot:title>
        Usuario
    </x-slot>
    <main id="meus_dados">

    <div class="container">
        <h1 class="titulo">
            <spain> Área restrita</spain>
        </h1>

        <form class="centro" method= "POST"  action ="" > 

            <h2 class="campo_titulo2">
            <spain> Meus dados cadastrais</spain>
            </h2>

            <div class="row">
                <div class="campo__input">
                    <div class="col-lg-12">
                            <label class="sr-only" for="nome">Nome:</label>
                            <input type="text" class="style__campo" placeholder="Nome:" id="nome" name="nome">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="campo__input">
                        <label class="sr-only" for="CPF"> CPF:</label>
                            <input type="text" class="style__campo" placeholder="CPF:" id="cpf" name="CPF">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="campo__input">
                        <label class="sr-only" for="telefone"> Telefone:</label>
                            <input type="tel" class="style__campo" placeholder="Telefone:" id="telefone" name="TELEFONE">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="campo__input">
                        <label class="sr-only" for="e-mail"> E-mail:</label>
                            <input type="email" class="style__campo" placeholder="E-mail" id="e-mail" name="E-MAIL">
                    </div>
                </div>
            </div>

            <div class="lim__estilo">
                <button type=submit class="button" value="trocar senha"> TROCAR SENHAR </button>
                <button type=submit class="button" value="alterar"> ALTERAR </button>
            </div>
        </form>
    </div>
</main>
</x-layout-base>