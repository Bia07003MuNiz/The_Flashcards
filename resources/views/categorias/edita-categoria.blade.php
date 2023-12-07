<x-layout-base>
    <x-slot:title>
        Edita card
    </x-slot>
    <main id="editar__categorias" class="area-restrita" style="height: 525px; margin: 0 auto;">

        <div class="container " style="margin-top: 120px;">
            <div class="bloco__segura">
                <div class="bloco__conteudo">
                    <div class="style__espacamento">
                        <form action="{{route('categorias.update',$categoria)}}" method="POST" id="form-edita-categoria">
                            @method('PUT')
                            @csrf

                            <div class="container">
                                <h1 class="pb-3">Editar Card</h1>
                                <main class="form-signin w-50 m-auto p-">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" value="{{$categoria->nome}}" required>
                                            <label for="floatingNome">Nome Completo</label>
                                        </div>
                                        <p></p>
                                        <div class="form-floating">
                                            <select class="form-select" id="destaque" name="destaque" required>
                                                <option value="" selected disabled>Selecione o gênero
                                                </option>
                                                <option value="1" @if($categoria->destaque == 1) selected @endif>Habilitado</option>
                                                <option value="0" @if($categoria->destaque == 0) selected @endif>Desabilitado</option>
                                            </select>
                                            <label for="genero">Gênero</label>
                                        </div>
                                        <p></p>

                            <div class="lim__estilo2 d-flex justify-content-center ">
                                <button type="button" class="btn btn-outline-primary">
                                    <a class="btn__voltar" href="{{route('categorias.index')}}" style="text-decoration: none; color: black;">Voltar à listagem</a>
                                </button>
                                <button type=submit class="btn__salvar rounded mx-3">Salvar</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
        $( "#form-edita-categoria" ).validate({
            messages: {
                ordem: "Ordem é obrigatório",
                nome: "Nome é obrigatório",
                status: "Status é obrigatório",
                destaque: "Destaque é obrigatório",
            }
        });
    </script>
</x-layout-base>
