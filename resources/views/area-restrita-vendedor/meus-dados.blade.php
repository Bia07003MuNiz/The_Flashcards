<x-layout-base>
    <x-slot:title>
        Usuario
    </x-slot>
    <div class="container">
        <h1>Área restrita</h1>
        <form class="" method= "POST"  action ="" > 
            <div class="row">
                <div class="col-lg-6">
                    <label class="sr-only" for="nome">Nome:</label>
                    <input typ e="text" placeholder="nome:" id="nome" name="nome">
                </div>
                <div class="col-lg-6">
                <label class="sr-only" for="e-mail"> E-mail:</label>
                    <input type="email" name="e-mail">
                </div>
                <div class="col-lg-6">
                <label class="sr-only" for="telefone"> Telefone:</label>
                    <input type="tel" name="telefone">
                </div>
                <div class="col-lg-6">
                <label class="sr-only" for="CPF"> CPF:</label>
                    <input type="text" name="CPF">
                </div>
            </div>
            <button type=submit class="button" value="trocar senha"> TROCAR SENHAR </button>
            <button type=submit class="button" value="alterar"> ALTERAR </button>
        </form>
    </div>
</x-layout-base>