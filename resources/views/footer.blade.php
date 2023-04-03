<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 box__logo">
                <img src="assets/images/logo-rodape.png" class="img-fluid" alt="Logo" width="289" height="32">
                <div class="cnpj">XX. XXX. XXX/0001-XX</div>
            </div>
            <div class="col-lg-4">
                <div class="links__uteis">
                    <a class="link{{Request::is('politicas') ? ' active' : '' }}" href="{{route('politicas')}}">Políticas de privacidade</a>
                    <a class="link{{Request::is('termos') ? ' active' : '' }}" href="{{route('termos')}}">Termos de uso</a>
                    <a class="link{{Request::is('duvidas') ? ' active' : '' }}" href="{{route('duvidas')}}">Dúvidas frequentes</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="dados__uteis">
                    <a class="util__tel" href="tel:1433729999">(14)3372-9999</a>
                    <a class="util__email link__grande" href="mailto:contato@empresa.com.br" target="_blank" rel="noopener">contato@empresa.com.br</a>
                </div>
            </div>
        </div>
        <div class="creditos">
            2023 © Todos os direitos reservados. Implementação de conteúdo e material fornecidos pelo administrador.
        </div>
    </div>
</footer>