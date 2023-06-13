<x-layout-base>
    <x-slot:title>
        Contato
    </x-slot>
    <main id="contatos">
        <div class="container">
            <h1 class="titulo"><span> CONTATO</span></h1>
            <div class="texto__style">
                <p>Non arcu duis massa facilisis auctor et curabitur, eros mi aliquam commodo lacus sodales malesuada in, amet augue dui tellus suspendisse ligula. sociosqu taciti aliquet class bibendum ad etiam pretium rutrum, taciti blandit congue cursus suscipit a vitae mollis sapien, placerat lacinia venenatis purus sed consectetur est. metus litora tortor cubilia tristique eget id eget interdum proin elementum placerat, euismod nibh torquent ornare consequat leo vulputate habitasse ullamcorper laoreet.</p>
            </div>
            <form method="POST" action ="{{route('salvacontato')}}" id="form-contato">
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="nome">Nome</label>
                            <input type="text" class="style__campo" placeholder="Nome*" id="nome" name="nome" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="e-mail"> E-mail</label>
                                <input type="email" class="style__campo" name="email" placeholder="E-mail*" id="email" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="telefone"> Telefone</label>
                                <input type="tel" class="style__campo" name="telefone" placeholder="Telefone*" id="telefone" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="segura__select">
                            <label class="sr-only" for="nome"> Assunto</label>
                            <select class="sub__select" id="assunto" name="assunto" required>
                                <option selected disabled>Assunto*</option>
                                <option>Reclamações</option>
                                <option>Dúvidas</option>
                                <option>Sugestões</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="campo__input">
                            <label class="sr-only" for="mensagem">Mensagem*</label>
                            <textarea class="form-control style__campo" rows="5" placeholder="Mensagem" id="mensagem" name="mensagem" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <input class="rodape__check" type="radio" name="termos" id="contato__termos" required>
                        <label class="rodape__check__label" for="contato__termos">
                            Eu li e concordo com os <a href="{{route('termos')}}">termos e condições de uso</a>.
                        </label>			
                    </div>
                </div>
                <div class="btn__center">
                    <a href="javascript:history.back()" class="btn__style">VOLTAR</a>
                    <button type="submit"  class="btn__style">ENVIAR</button>
                   
                </div>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>    
    <script>
        $( "#form-contato" ).validate({
            messages: {
                nome: "Nome é obrigatório",
                email: "E-mail é obrigatório",
                telefone: "Telefone é obrigatório",
                assunto: "Assunto é obrigatório",
                mensagem: "Mensagem é obrigatório",
                termos: "Aceite os termos",
            }
        });
    </script>
</x-layout-base>