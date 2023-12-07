<x-layout-base>
<div class="container" style="height: 507px">


            <main class="form-signin w-50 m-auto mt-5" style="position: relative; top:30px">
                <h1 class="my-5">Editar pergunta e resposta</h1>
                <form action="{{ route('produtos.update', $produto) }}" method="POST" enctype="multipart/form-data"
                id="form-edita-produto">
                @method('PUT')
                @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Nome*" id="nome" name="nome" value="{{ $produto->nome }}" required>
                        <label for="floatingNome">Nome </label>
                    </div>
                    <p></p>

                    <div class="form-floating">
                        <input type="text" class="form-control"  placeholder="Código*" id="codigo" name="codigo" value="{{ $produto->codigo }}" required>
                        <label  for="codigo">Código</label>
                    </div>
                    <p></p>
                    <div class="form-floating">
                        <select class="form-select" name="destaque" id="destaque" required>
                            <option disabled selected>Destaque*</option>
                            <option value="1" @if ($produto->destaque == 1) selected @endif>
                                Habilitado</option>
                            <option value="0" @if ($produto->destaque == 0) selected @endif>
                                Desativado</option>
                        </select>
                        <label for="destaque">Destaque*</label>
                    </div>
                    <p></p>
                    <div class="lim__estilo d-flex justify-content-center ">
                        <button type=submit class="btn__salvar rounded">Salvar</button>
                    </div>
                </div>
            </form>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
        $("#form-edita-produto").validate({
            messages: {
                ordem: "Ordem é obrigatório",
                nome: "Nome é obrigatório",
                status: "Status é obrigatório",
                destaque: "Destaque é obrigatório",
            }
        });
    </script>
</x-layout-base>
