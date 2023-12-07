<x-layout-base>
    <x-slot:title>
        Área restrita > Meus dados
    </x-slot>
    <main id="meus__dados" class="area-restrita">
        <div class="container">
            <h1 class="titulo">
                <span>Meus dados cadastrais</span>
            </h1>
            <div class="form-signin m-auto" style="width: 800px">

                <div class="bloco__conteudo">
                    <div class="style__espacamento">

                        <form action="{{route('users.update',$user)}}" method="POST" id="form-user-atualiza">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

                                <div class="col-lg-12">

                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Nome:" id="nome" name="nome" value="{{$user->nome}}" required>
                                            <label for="floatingNome">Nome Completo</label>
                                    </div>

                                    <p></p>

                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="E-mail" id="e-mail" name="email" value="{{$user->email}}" required>
                                            <label for="floatingNome">E-mail</label>
                                    </div>
                                    <p></p>

                    <div class="form-floating ">
                        <input type="password" class="form-control" placeholder="Senha:" id="password" name="password"  value="{{$user->password}}"  required>
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <p></p>

                    <div class="form-floating ">
                        <input type="text" required class="form-control" placeholder="Celular:" id="celular" name="celular" value="{{$user->celular}}" required>
                        <label for="Celular">Telefone</label>
                    </div>
                    <p></p>
                    <div class="form-floating">
                        <select class="form-select" id="genero" name="genero" required>
                            <option value="" selected disabled>Selecione o gênero</option>
                            <option value="M" @if($user->genero == "M") selected @endif>Masculino</option>
                            <option value="F" @if($user->genero == "F") selected @endif>Feminino</option>
                        </select>
                        <label for="genero">Gênero</label>
                    </div>
                    <p></p>

                    <div class="form-floating">
                        <select class="form-select" id="uf" name="uf" required>
                            <option selected disabled>Estado</option>
                            <option value="Acre" @if($user->uf == "Acre") selected @endif>Acre</option>
                                                        <option value="Alagoas" @if($user->uf == "Alagoas") selected @endif>Alagoas</option>
                                                        <option value="Amapá" @if($user->uf == "Amapá") selected @endif>Amapá</option>
                                                        <option value="Amazonas" @if($user->uf == "Amazonas") selected @endif>Amazonas</option>
                                                        <option value="Bahia" @if($user->uf == "Bahia") selected @endif>Bahia</option>
                                                        <option value="Ceará" @if($user->uf == "Ceará") selected @endif>Ceará</option>
                                                        <option value="Distrito Federal" @if($user->uf == "Distrito Federal") selected @endif>Distrito Federal</option>
                                                        <option value="Espírito Santo" @if($user->uf == "Espírito Santo") selected @endif>Espírito Santo</option>
                                                        <option value="Goiás" @if($user->uf == "Goiás") selected @endif>Goiás</option>
                                                        <option value="Maranhão" @if($user->uf == "Maranhão") selected @endif>Maranhão</option>
                                                        <option value="Mato Grosso" @if($user->uf == "Mato Grosso") selected @endif>Mato Grosso</option>
                                                        <option value="Mato Grosso do Sul" @if($user->uf == "Mato Grosso do Sul") selected @endif>Mato Grosso do Sul</option>
                                                        <option value="Minas Gerais" @if($user->uf == "Minas Gerais") selected @endif>Minas Gerais</option>
                                                        <option value="Pará" @if($user->uf == "Pará") selected @endif>Pará</option>
                                                        <option value="Paraíba" @if($user->uf == "Paraíba") selected @endif>Paraíba</option>
                                                        <option value="Paraná" @if($user->uf == "Paraná") selected @endif>Paraná</option>
                                                        <option value="Pernambuco" @if($user->uf == "Pernambuco") selected @endif>Pernambuco</option>
                                                        <option value="Piauí" @if($user->uf == "Piauí") selected @endif>Piauí</option>
                                                        <option value="Rio de Janeiro" @if($user->uf == "Rio de Janeiro") selected @endif>Rio de Janeiro</option>
                                                        <option value="Rio Grande do Norte" @if($user->uf == "Rio Grande do Norte") selected @endif>Rio Grande do Norte</option>
                                                        <option value="Rio Grande do Sul" @if($user->uf == "Rio Grande do Sul") selected @endif>Rio Grande do Sul</option>
                                                        <option value="Rondônia" @if($user->uf == "Rondônia") selected @endif>Rondônia</option>
                                                        <option value="Roraima" @if($user->uf == "Roraima") selected @endif>Roraima</option>
                                                        <option value="Santa Catarina" @if($user->uf == "Santa Catarina") selected @endif>Santa Catarina</option>
                                                        <option value="São Paulo" @if($user->uf == "São Paulo") selected @endif>São Paulo</option>
                                                        <option value="Sergipe" @if($user->uf == "Sergipe") selected @endif>Sergipe</option>
                                                        <option value="Tocantins" @if($user->uf == "Tocantins") selected @endif>Tocantins</option>
                        </select>
                        <label for="uf">Estado</label>
                    </div>
                    <p></p>

                    <div class="form-floating ">
                        <input type="" class="form-control" name="cidade" placeholder="Cidade*" id="cidade" value="{{$user->cidade}}" required>
                        <label for="cidade">Cidade</label>
                    </div>
                    <p></p>
                    <div class="d-flex">
                        <div class="form-floating pe-2 " style="width:150%;">
                            <input type="text" class="form-control"name="rua" placeholder="Endereço*" id="rua" value="{{$user->rua}}" required>
                            <label for="rua">Endereço</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" name="num" placeholder="Número*" id="num" value="{{$user->num}}" required>
                            <label for="numero">Número</label>
                        </div>
                    </div>

                    <p></p>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="bairro" placeholder="Bairro*" id="Bairro" value="{{$user->bairro}}" required>
                        <label for="bairro">Bairro</label>
                    </div>
                    <p></p>


                                </div>



                            </div>
                            <div class="lim__estilo d-flex justify-content-center">
                                <button class="btn btn-outline-primary btn-space"><a class="btn__voltar" href="{{ route('categorias.index') }}">Voltar</a></button>

                                <button type="submit" class="btn__salvar2">ALTERAR</button>
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
    @if(auth()->user()->tipo == 0)
        <script>
            $( "#form-user-atualiza" ).validate({
                messages: {
                    nome: "Nome é obrigatório",
                    cpf: "CPF é obrigatório",
                    celular: "Telefone é obrigatório",
                    email: "E-mail é obrigatório",
                    password: "Senha é obrigatório",
                    cep: "CEP é obrigatório",
                    uf: "Estado é obrigatório",
                    cidade: "Cidade é obrigatório",
                    num: "Número é obrigatório",
                    bairro: "Bairro é obrigatório",
                    rua: "Endereço é obrigatório",
                }
            });
        </script>
    @elseif(auth()->user()->tipo == 1)
        <script>
            $( "#form-user-atualiza" ).validate({
                messages: {
                    nome: "Nome é obrigatório",
                    cpf: "CPF é obrigatório",
                    celular: "Telefone é obrigatório",
                    email: "E-mail é obrigatório",
                    password: "Senha é obrigatório",
                }
            });
        </script>
    @endif
</x-layout-base>
