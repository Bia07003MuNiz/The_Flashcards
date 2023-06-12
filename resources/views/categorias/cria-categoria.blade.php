<x-layout-base>
    <x-slot:title>
        Área restrita > Cadastrar nova categoria
    </x-slot>
    <main id="cadastrar__categoria">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="{{route('categorias.index')}}"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar à listagem</a>
                    <div class="style__espacamento">
                        <h2 class="title__box">Cadastrar nova categoria</h2>
                        <form id="form-cadastro-categoria" class="centro" action="{{route('categorias.store')}}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="campo__input">
                                        <label class="sr-only" for="ordem">Ordem</label>
                                        <input type="text" class="style__campo" placeholder="Ordem" id="ordem" name="ordem" required>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="campo__input ">
                                        <label class="sr-only" for="nome">Nome</label>
                                        <input type="text" class="style__campo" placeholder="Nome" id="nome" name="nome" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="campo__input ">
                                        <label class="sr-only" for="status">Status</label>
                                        <select class="sub__select" id="status" name="status" required>
                                            <option value="" selected disabled>Status</option>
                                            <option value="1">Habilitado</option>
                                            <option value="0">Desabilitado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="campo__input ">
                                        <label class="sr-only" for="destaque">Destaque</label>
                                        <select class="sub__select" id="destaque" name="destaque" required>
                                            <option value="" selected disabled>Destaque</option>
                                            <option value="1">Habilitado</option>
                                            <option value="0">Desabilitado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="lim__estilo">
                                <button type="submit" class="btn__salvar">Salvar</button>
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
        $( "#form-cadastro-categoria" ).validate({
            messages: {
                ordem: "Ordem é obrigatório",
                nome: "Nome é obrigatório",
                status: "Status é obrigatório",
                destaque: "Destaque é obrigatório",
            }
        });
    </script>
</x-layout-base>