<x-layout-base>
    <x-slot:title>
        Usuario
    </x-slot>
    <div class="container">
        <h1>Área restrita</h1>
        <form class="" method= "POST"  action ="" > 
        <h2>Cadastrar nova categoria</h2>
            <div class="row">
                <div class="col-lg-6">
                    <label class="sr-only" for="nome">Ordem:</label>
                    <input type="text" placeholder="ordem" id="ordem" name="ordem">
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <label class="sr-only" for="nome">Nome:</label>
                    <input type="text" placeholder="nome" id="nome" name="nome">
                </div>
                <div class="col-lg-6">
                <label class="sr-only" for="nome"> Status:</label>
                <select class="form-control form-control-sm">
                    <option>habilitado</option>
                    <option>desabilitado</option>
                </select>
                </div>
            </div>
            <button type=submit value="Salvar">
        </form>
    </div>
</x-layout-base>