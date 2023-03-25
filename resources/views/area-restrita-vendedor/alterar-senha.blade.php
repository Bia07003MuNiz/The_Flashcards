<x-layout-base>
    <x-slot:title>
        Usuario
    </x-slot>
    <div class="container">
        <h1>Área restrita</h1>
        <form class="" method= "POST"  action ="" >
        <h2>Alterar senha</h2> 
            <div class="row">
                <div class="col-lg-6">
                    <label class="sr-only" for="nome">Senha atual:</label>
                    <input type="password" placeholder="senha atual:" id="senha atual" name="senha atual">
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <label class="sr-only" for="nome">Nova senha:</label>
                    <input type="password" placeholder="Nova senha:" id="nova senha" name="nova senha">
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <label class="sr-only" for="nome">Confirmar nova senha:</label>
                    <input type="password" placeholder="confirmar nova senha:" id="confirmar nova senha" name="confirmar nova senha">
                </div>
            <button type=submit value="Salvar">
        </form>
    </div>
</x-layout-base>