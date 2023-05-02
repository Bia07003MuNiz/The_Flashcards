<x-layout-base>
    <x-slot:title>
        cadastre-se
    </x-slot>
    <main>
        <div class="container">
            <h1 class="titulo"><span>CADASTRE-SE</span></h1>
            <form class="centro" method= "POST"  action ="" >
                <div class="row">
                    <div class="col-lg-2 custom__checkbox margin__style">
                        <b class="style__letras">Você é:</b>
                    </div>
                    <div class="col-lg-2 custom__checkbox margin__style">
                        <input class="rodape__check style__letras " type="checkbox" name="termos" id="contato__termos">
                        <label class="rodape__check__label style__letras" for="contato__termos">
                        <b class="style__letras">Cliente</b>
                        </label>
                    </div>    	
                    <div class="col-lg-2 custom__checkbox margin__style">
                        <input class="rodape__check" type="checkbox" name="termos" id="contato__termos">
                        <label class="rodape__check__label" for="contato__termos">
                            <b class="style__letras">vendedor</b>
                        </label>		
                    </div>
                    <div class="col-lg-12 margin__style">
                        <div class="campo__input ">
                            <label class="sr-only" for="nome">Nome</label>
                            <input type="text" class="style__campo" placeholder="Nome" id="nome" name="nome">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input ">
                            <label class="sr-only" for="CPF">CPF</label>
                            <input type="text" class="style__campo" placeholder="CPF" id="CPF" name="CPF">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="Celular">Celular</label>
                                <input type="email" class="style__campo" name="Celular" placeholder="Celular" id="Celular">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="campo__input ">
                            <label class="sr-only" for="E-mail">E-mail</label>
                            <input type="text" class="style__campo" placeholder="E-mail" id="E-mail" name="E-mail">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="Senha">Senha</label>
                            <input type="tel" class="style__campo" name="Senha" placeholder="Senha" id="Senha">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="Confirmação de senha"> Confirmação de senha</label>
                            <input type="tel" class="style__campo" name="Confirmação de senha" placeholder="Confirmação de senha" id="Confirmação de senha">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-2 custom__checkbox margin__style">
                            <b class="style__letras">Enderço</b>
                        </div>
                    </div>
                    <div class="col-lg-6 margin__style">
                        <div class="campo__input ">
                            <label class="sr-only" for="CEP">CEP</label>
                            <input type="text" class="style__campo" placeholder="CEP" id="CEP" name="CEP">
                        </div>
                    </div>
                    <div class="col-lg-6 margin__style">
                        <div class="segura__select ">
                            <label class="sr-only" for="Estado"> Estado</label>
                            <select class="sub__select">
                                <option selected disabled>Estado</option>
                                <option>Acre</option>
                                <option>Alagoas</option>
                                <option>Amapá</option>
                                <option>Amazonas</option>
                                <option>Bahia</option>
                                <option>Ceará</option>
                                <option>Distrito Federal</option>
                                <option>Espírito Santo</option>
                                <option>Goiás</option>
                                <option>Maranhão</option>
                                <option>Mato Grosso</option>
                                <option>Mato Grosso do Sul</option>
                                <option>Minas Gerais</option>
                                <option>Pará</option>
                                <option>Paraíba</option>
                                <option>Paraná</option>
                                <option>Pernambuco</option>
                                <option>Piauí</option>
                                <option>Rio de Janeiro</option>
                                <option>Rio Grande do Norte</option>
                                <option>Rio Grande do Sul</option>
                                <option>Rondônia</option>
                                <option>Roraima</option>
                                <option>Santa Catarina</option>
                                <option>São Paulo</option>
                                <option>Sergipe</option>
                                <option>Tocantins</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="campo__input">
                            <label class="sr-only" for="Cidade"> Cidade</label>
                            <input type="tel" class="style__campo" name="Cidade" placeholder="Cidade" id="Cidade">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="campo__input">
                            <label class="sr-only" for="Numero">Numero</label>
                            <input type="email" class="style__campo" name="Numero" placeholder="Numero" id="Numero">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="Bairro"> Bairro</label>
                                <input type="tel" class="style__campo" name="Bairro" placeholder="Bairro" id="Bairro">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="Endereço">Endereço</label>
                            <input type="email" class="style__campo" name="Endereço" placeholder="Endereço" id="Endereço">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="campo__input ">
                            <label class="sr-only" for="Complemento">Complemento</label>
                            <input type="text" class="style__campo" placeholder="Complemento" id="Complemento" name="Complemento">
                        </div>
                    </div>
                    <div class="col-lg-6 custom__checkbox">
                        <input class="rodape__check" type="checkbox" name="termos" id="contato__termos">
                        <label class="rodape__check__label" for="contato__termos">
                            Eu li e concordo com os <a href="termos-de-uso">termos e condições de uso</a>.
                        </label>			
                    </div>
                </div>
                <div class="lim__estilo">
                    <button type="submit" class="button">Cadastre-se</button>
                </div>
            </form>
        </div>
    </main>
</x-layout-base>