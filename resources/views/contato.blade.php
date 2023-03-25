<x-layout-base>
    <x-slot:title>
        Contato
    </x-slot>
    <div class="container">
        <h1>Contato</h1>
        <form class="" method= "POST"  action ="" >
            <div class="row">
                <div class="col-lg-6">
                    <label class="sr-only" for="nome">Nome:</label>
                    <input type="text" placeholder="nome:" id="nome" name="nome">
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
                <label class="sr-only" for="nome"> Assunto:</label>
                <select class="form-control form-control-sm">
                    <option>Small select</option>
                    <option>Small select</option>
                    <option>Small select</option>
                    <option>Small select</option>
                </select>
                </div>
                <div class="col-lg-12">
                <label class="sr-only" for="mensagem">  Mensagem:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-lg-12">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Eu li e concordo com os termos e condiçoes de uso
                </label>

                </div>
            </div>
            <button type=submit value="Voltar">
            <button type=submit value="Enviar">
        </form>
    </div>
</x-layout-base>