<x-layout-base>
    <x-slot:title>
        Contato
    </x-slot>
    <main id="contatos">
        <div class="container">
            <h1 class="titulo">
                <span> CONTATO</span>
            </h1>
            <div class="centro_inicio">
                <p>
                    Non arcu duis massa facilisis auctor et curabitur, eros mi aliquam commodo lacus sodales malesuada in, amet augue dui tellus suspendisse ligula. sociosqu taciti aliquet class bibendum ad etiam pretium rutrum, taciti blandit congue cursus suscipit a vitae mollis sapien, placerat lacinia venenatis purus
                    sed consectetur est. metus litora tortor cubilia tristique eget id eget interdum proin elementum placerat, euismod nibh torquent ornare consequat leo vulputate habitasse ullamcorper laoreet.  
                </p>
            </div>
            <form class="centro" method= "POST"  action ="" >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="campo__input ">
                            <label class="sr-only" for="nome">Nome:</label>
                            <input type="text" placeholder="NOME:" id="nome" name="nome">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="e-mail"> E-mail:</label>
                                <input type="email" name="e-mail" placeholder="EMAIL:" id="e-mail">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="telefone"> Telefone:</label>
                                <input type="tel" name="telefone" placeholder="TELEFONE:" id="Telefone">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="nome"> Assunto:</label>
                            <select class="form-control form-control-sm">
                                <option>Reclamações</option>
                                <option>Duvidas</option>
                                <option>Sugestões</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="campo__input2">
                            <label class="sr-only" for="mensagem">  Mensagem:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="MENSAGEM"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 lim__estyilo">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Eu li e concordo com os termos e condiçoes de uso
                    </label>

                    </div>
                </div>
                <div class="lim__estilo">
                    <button type="submit" class="button" value="Voltar">VOLTAR</button>
                    <button type="submit" class="button" value="Enviar">ENVIAR</button>
                </div>
            </form>
        </div>
</main>
</x-layout-base>