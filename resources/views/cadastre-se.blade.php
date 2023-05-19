<x-layout-base>
    <x-slot:title>
        cadastre-se
    </x-slot>
    <main>
        <div class="container">
            <h1 class="titulo"><span>CADASTRE-SE</span></h1>
            <form class="centro" action="{{route('users.store')}}" method="POST">
            @method('POST')
            @csrf
               <div class="row">
                    <div class="col-lg-2 custom__checkbox margin__style">
                        <b class="style__letras">Você é:</b>
                    </div>
                     <div class="col-lg-2 custom__checkbox margin__style">
                        <input class="rodape__check style__letras " type="radio" name="tipo" value="0" id="categoria0">
                        <label class="rodape__check__label style__letras" for="categoria0">
                            <b class="style__letras">Cliente</b>
                        </label>
                </div>    

                <div class="col-lg-2 custom__checkbox margin__style">
                    <input class="rodape__check"type="radio" name="tipo" value="1" id="categoria1">
                    <label class="rodape__check__label" for="categoria1">
                        <b class="style__letras">Vendedor</b>
                    </label>		
                </div>
                    
                    <div class="col-lg-12 margin__style">
                        <div class="campo__input ">
                            <label class="sr-only" for="exampleInputEmail1">Nome</label>
                            <input type="text" class="style__campo" placeholder="Nome" id="nome" name="nome">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input ">
                            <label class="sr-only" for="exampleInputEmail1">CPF</label>
                            <input type="text" class="style__campo" placeholder="CPF" id="cpf" name="cpf">
                        </div>
                    </div>
                     <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="exampleInputEmail1">Celular</label>
                                <input type="text" class="style__campo" name="Celular" placeholder="Celular" id="Celular">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="campo__input ">
                            <label class="sr-only" for="exampleInputEmail1E-mail">E-mail</label>
                            <input type="email" class="style__campo" placeholder="E-mail" id="email" name="email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="exampleInputEmail1">Senha</label>
                            <input type="password" class="style__campo" name="password" placeholder="Senha" id="password">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="exampleInputEmail1"> Confirmação de senha</label>
                            <input type="password" class="style__campo" name="Confirmação de senha" placeholder="Senha" id="password">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-2 custom__checkbox margin__style">
                            <b class="style__letras">Endereço</b>
                        </div>
                    </div>
                    <div class="col-lg-6 margin__style">
                        <div class="campo__input ">
                            <label class="sr-only" for="exampleInputEmail1">CEP</label>
                            <input type="text" class="style__campo" placeholder="CEP" id="cep" name="cep">
                        </div>
                    </div>
                    <div class="col-lg-6 margin__style">
                        <div class="segura__select ">
                            <label class="sr-only" for="exampleInputEmail1"> Estado</label>
                            <select class="sub__select" id="uf" name="uf">
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
                            <label class="sr-only" for="exampleInputEmail1"> Cidade</label>
                            <input type="text" class="style__campo" name="Cidade" placeholder="Cidade" id="Cidade">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="campo__input">
                            <label class="sr-only" for="exampleInputEmail1">Número</label>
                            <input type="num" class="style__campo" name="num" placeholder="Numero" id="num">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="exampleInputEmail1"> Bairro</label>
                                <input type="text" class="style__campo" name="Bairro" placeholder="Bairro" id="Bairro">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="exampleInputEmail1">Rua</label>
                            <input type="text" class="style__campo" name="rua" placeholder="Endereço" id="rua">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="campo__input ">
                            <label class="sr-only" for="exampleInputEmail1">Complemento</label>
                            <input type="text" class="style__campo" placeholder="Complemento" id="compl" name="compl">
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