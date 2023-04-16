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
            <form method="POST" action ="{{route('logar')}}" >
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="nome">Nome</label>
                            <input type="text" class="style__campo" placeholder="Nome" id="nome" name="nome">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="e-mail"> E-mail</label>
                                <input type="email" class="style__campo" name="e-mail" placeholder="E-mail" id="e-mail">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="telefone"> Telefone</label>
                                <input type="tel" class="style__campo" name="telefone" placeholder="Telefone" id="Telefone">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="segura__select">
                            <label class="sr-only" for="nome"> Assunto</label>
                            <select class="sub__select">
                                <option selected disabled>Assunto</option>
                                <option>Reclamações</option>
                                <option>Dúvidas</option>
                                <option>Sugestões</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="campo__input">
                            <label class="sr-only" for="mensagem">Mensagem</label>
                            <textarea class="form-control style__campo" rows="5" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 custom__checkbox">
                        <input class="rodape__check" type="checkbox" name="termos" id="contato__termos">
                        <label class="rodape__check__label" for="contato__termos">
                            Eu li e concordo com os <a href="termos-de-uso">termos e condições de uso</a>.
                        </label>			
                    </div>
                </div>
                <div class="btn__center">
                    <a href="javascript:history.back()" class="btn__style">VOLTAR</a>
                    <button type="submit" class="btn__style">ENVIAR</button>
                </div>
            </form>
        </div>
    </main>
</x-layout-base>