<x-layout-base>
    <x-slot:title>
        Usuario
    </x-slot>
    <div class="container">
        <h1>Área restrita</h1>
        <form class="" method= "POST"  action ="" > 
        <h2>Cadastrar novo produto</h2>
        <div class="row">
                <div class="col-lg-6">
                    <label class="sr-only" for="nome">Nome</label>
                    <input type="text" placeholder="nome" id="nome" name="nome">
                </div>
            <div class="row">
                <div class="col-lg-6">
                    <label class="sr-only" for="nome">Codigo</label>
                    <input type="text" placeholder="codigo" id="codigo" name="codigo">
                </div>
                <div class="col-lg-6">
                <label class="sr-only" for="nome"> Categoria</label>
                <select class="form-control form-control-sm">
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
                <div class="col-lg-12">
                <label class="sr-only" for="mensagem">  Informações</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-lg-6">
                    <label class="sr-only" for="nome"> Valor</label>
                    <input type="text" placeholder="valor" id="valor" name="valor">
                </div>
                <div class="form-group">
                     <label for="exampleFormControlFile1">  Upload de imagem</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="col-lg-6">
                <label class="sr-only" for="nome"> Status</label>
                <select class="form-control form-control-sm">
                    <option>habiliado</option>
                    <option>desativado</option>
                </select>
            </div>
            <button type=submit class="button" value="Salvar"> Salvar </button>
        </form>
    </div>
</x-layout-base>