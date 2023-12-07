<x-layout-base>
    <x-slot:title>
        Cadastre-se
    </x-slot>
    <div class="container">
        <h1 class="pb-3">CADASTRO</h1>
        <main class="form-signin w-50 m-auto p-">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('users.store') }}" id="form-cadastro" method="POST">
                @method('POST')
                @csrf
                <div class="opcoes__style">

                    <div class="custom__opcoes">
                        <b class="style__letras">Você é:</b>
                        <input class="rodape__check" type="radio" name="tipo" value="0" id="cliente"
                            onchange="formCliente()" required>
                        <label class="rodape__check__label style__letras" for="cliente">Professor</label>
                        <input class="rodape__check" type="radio" name="tipo" value="1" id="vendedor"
                            onchange="formVendedor()" required>
                        <label class="rodape__check__label style__letras" for="vendedor">Estudante</label>
                    </div>
                    <p></p>

                </div>



                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="Nome*" id="nome" name="nome"
                        required>
                    <label for="floatingNome">Nome Completo</label>
                </div>
                <p></p>

                <div class="form-floating ">
                    <input type="email" required class="form-control" placeholder="E-mail*" id="email"
                        name="email">
                    <label for="email">E-mail</label>
                </div>

                <div class="form-floating ">

                    <p></p>

                    <div class="form-floating ">
                        <input type="password" class="form-control"placeholder="Senha*" name="password" id="password">
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <p></p>

                    <div class="form-floating ">
                        <input type="text" required class="form-control" placeholder="Celular*" name="celular"
                            id="celular">
                        <label for="Celular">Telefone</label>
                    </div>
                    <p></p>

                    <div class="form-floating">
                        <select class="form-select" id="genero" name="genero" required>
                            <option value="" selected disabled>Selecione o gênero
                            </option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                        <label for="genero">Gênero</label>
                    </div>
                    <p></p>

                    <div class="form-floating">
                        <select class="form-select" id="uf" name="uf" required>
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
                        <label for="uf">Estado</label>
                    </div>
                    <p></p>

                    <div class="form-floating ">
                        <input type="" class="form-control" name="cidade" placeholder="Cidade*" id="cidade"
                            required>
                        <label for="cidade">Cidade</label>
                    </div>
                    <p></p>
                    <div class="d-flex">
                        <div class="form-floating pe-2 " style="width:150%;">
                            <input type="text" class="form-control" name="rua" placeholder="Endereço*"
                                id="rua" required>
                            <label for="rua">Endereço</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control"name="num" placeholder="Número*"
                                id="num" required>
                            <label for="numero">Número</label>
                        </div>
                    </div>

                    <p></p>
                    <div class="form-floating">
                        <input type="text" class="form-control"name="bairro" placeholder="Bairro*" id="bairro"
                            required>
                        <label for="bairro">Bairro</label>
                    </div>
                    <p></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Cadastre-se</button>
                    <p></p>



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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
        $("#form-cadastro").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 6,
                },
                confirmacao: {
                    required: true,
                    equalTo: "#password"
                }
            },
            messages: {
                tipo: "Tipo é obrigatório",
                nome: "Nome é obrigatório",
                cpf: "CPF é obrigatório",
                celular: "Celular é obrigatório",
                email: "E-mail é obrigatório",
                password: {
                    required: "Senha é obrigatório",
                    minlength: "Senha deve possuir no mínimo 6 caracteres!",
                },
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
