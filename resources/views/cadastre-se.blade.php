<x-layout-base>
    <x-slot:title>
        Cadastre-se
    </x-slot>
    <main id="cadastre">
        <div class="container">
            <h1 class="titulo"><span>CADASTRE-SE</span></h1>
            <form action="{{route('users.store')}}" id="form-cadastro" method="POST">
                @method('POST')
                @csrf
                <div class="opcoes__style">
                    <b class="style__letras">Você é:</b>
                    <div class="custom__opcoes">
                        <input class="rodape__check" type="radio" name="tipo" value="0" id="cliente" onchange="formCliente()">
                        <label class="rodape__check__label style__letras" for="cliente">Cliente</label>
                    </div>
                    <div class="custom__opcoes">
                        <input class="rodape__check" type="radio" name="tipo" value="1" id="vendedor" onchange="formVendedor()">
                        <label class="rodape__check__label style__letras" for="vendedor">Vendedor</label>		
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="campo__input ">
                            <label class="sr-only" for="nome">Nome</label>
                            <input type="text" class="style__campo" placeholder="Nome*" id="nome" name="nome" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input ">
                            <label class="sr-only" for="cpf">CPF</label>
                            <input type="text" required class="style__campo" placeholder="CPF*" id="cpf" name="cpf" required>
                        </div>
                    </div>
                     <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="Celular">Celular</label>
                            <input type="text" required class="style__campo" placeholder="Celular*" name="celular" id="Celular">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="campo__input ">
                            <label class="sr-only" for="email">E-mail</label>
                            <input type="email" required class="style__campo" placeholder="E-mail*" id="email" name="email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="password">Senha</label>
                            <input type="password" required class="style__campo" placeholder="Senha*" name="password" id="password">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campo__input">
                            <label class="sr-only" for="confirmacao">Confirmação de senha</label>
                            <input type="password" required class="style__campo" name="confirmacao" placeholder="Confirmação de senha*" id="confirmacao">
                        </div>
                    </div>
                </div>
                <div class="cliente__group">
                    <div class="row">
                        <div class="col-lg-12" style="text-align: start; margin-bottom: 20px">
                            <b class="style__letras">Endereço</b>
                        </div>
                        <div class="col-lg-6">
                            <div class="campo__input ">
                                <label class="sr-only" for="cep">CEP</label>
                                <input type="text" class="style__campo" placeholder="CEP*" id="cep" name="cep" required onchange="buscaCep()">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="segura__select ">
                                <label class="sr-only" for="uf">Estado</label>
                                <select class="sub__select" id="uf" name="uf" required>
                                    <option selected disabled>Estado</option>
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas">Alagoas</option>
                                    <option value="Amapá">Amapá</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Ceará">Ceará</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Espírito Santo">Espírito Santo</option>
                                    <option value="Goiás">Goiás</option>
                                    <option value="Maranhão">Maranhão</option>
                                    <option value="Mato Grosso">Mato Grosso</option>
                                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Pará">Pará</option>
                                    <option value="Paraíba">Paraíba</option>
                                    <option value="Paraná">Paraná</option>
                                    <option value="Pernambuco">Pernambuco</option>
                                    <option value="Piauí">Piauí</option>
                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                    <option value="Rondônia">Rondônia</option>
                                    <option value="Roraima">Roraima</option>
                                    <option value="Santa Catarina">Santa Catarina</option>
                                    <option value="São Paulo">São Paulo</option>
                                    <option value="Sergipe">Sergipe</option>
                                    <option value="Tocantins">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="campo__input">
                                <label class="sr-only" for="cidade">Cidade</label>
                                <input type="text" class="style__campo" name="cidade" placeholder="Cidade*" id="cidade" required>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="campo__input">
                                <label class="sr-only" for="numero">Número</label>
                                <input type="num" class="style__campo" name="num" placeholder="Número*" id="num" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="campo__input">
                                <label class="sr-only" for="bairro">Bairro</label>
                                    <input type="text" class="style__campo" name="bairro" placeholder="Bairro*" id="bairro" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="campo__input">
                                <label class="sr-only" for="rua">Endereço</label>
                                <input type="text" class="style__campo" name="rua" placeholder="Endereço*" id="rua" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="campo__input ">
                                <label class="sr-only" for="complemento">Complemento</label>
                                <input type="text" class="style__campo" placeholder="Complemento" id="compl" name="compl">
                            </div>
                        </div>
                        <div class="col-lg-12 custom__checkbox" style="text-align: start">
                            <input class="rodape__check" type="checkbox" name="termos" id="termos" required>
                            <label class="rodape__check__label" for="termos">Eu li e concordo com os <a href="{{route('termos')}}">termos e condições de uso</a>.</label>
                        </div>
                    </div>
                </div>
                <div class="lim__estilo">
                    <button type="submit" class="btn__enviar">CADASTRE-SE</button>
                </div>
            </form>
            @push('cadastro')
                @once
                    <script>
                        function pushTest() {
                            $('.toast').toast('show');
                        }
                    </script>
                    <div class="toast message__style" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">Cadastrado!</div>
                    </div>
                @endonce
            @endpush
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>    
    <script>
        $( "#form-cadastro" ).validate({
            rules: {
                password: {
                    required: true,
                },
                confirmacao: {
                    required: true,
                    equalTo: "#password"
                }
            },
            messages: {
                nome: "Nome é obrigatório",
                cpf: "CPF é obrigatório",
                celular: "Celular é obrigatório",
                email: "E-mail é obrigatório",
                password: "Senha é obrigatório",
                confirmacao: {
                    required: "Campo obrigatório",
                    equalTo: "Senhas não conferem",
                },
                cep: "CEP é obrigatório",
                uf: "Estado é obrigatório",
                cidade: "Cidade é obrigatório",
                num: "Número é obrigatório",
                bairro: "Bairro é obrigatório",
                rua: "Endereço é obrigatório",
                termos: "Aceite os termos",
            }
        });
    </script>
</x-layout-base>