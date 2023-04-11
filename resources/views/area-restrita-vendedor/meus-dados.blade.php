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

        <h2>Meus dados cadastrais</h2>

            <div class="row">
                <div class="campo__input">
                    <div class="col-lg-12">
                            <label class="sr-only" for="nome">Nome:</label>
                            <input type="text" placeholder="nome:" id="nome" name="nome">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="campo__input">
                        <label class="sr-only" for="CPF"> CPF:</label>
                            <input type="text" placeholder="CPF:" id="cpf" name="CPF">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="campo__input">
                        <label class="sr-only" for="telefone"> Telefone:</label>
                            <input type="tel" placeholder="TELEFONE:" id="telefone" name="TELEFONE">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="campo__input">
                        <label class="sr-only" for="e-mail"> E-mail:</label>
                            <input type="email" placeholder="E-MAIL" id="e-mail" name="E-MAIL">
                    </div>
                </div>
            </div>

            <div class="lim__estilo">
                <button type=submit class="button" value="trocar senha"> TROCAR SENHAR </button>
                <button type=submit class="button" value="alterar"> ALTERAR </button>
            </div>
        </form>
    </div>
</x-layout-base>