<x-layout-base>
    <x-slot:title>
        Área restrita > Meus dados
    </x-slot>
    <main id="meus__dados" class="area-restrita">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="javascript:history.back()"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar</a>
                    <div class="style__espacamento">
                        <h2 class="title__box">Meus dados cadastrais</h2>
                        <form action="{{route('users.update',$user)}}" method="POST" id="form-user-atualiza">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="campo__input">
                                        <label class="label__campos" for="nome">Nome:</label>
                                        <input type="text" class="style__campo" placeholder="Nome:" id="nome" name="nome" value="{{$user->nome}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="campo__input">
                                        <label class="label__campos" for="cpf">CPF:</label>
                                        <input type="text" class="style__campo" placeholder="CPF:" id="cpf" name="cpf" value="{{$user->cpf}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="campo__input">
                                        <label class="label__campos" for="celular">Celular:</label>
                                        <input type="tel" class="style__campo" placeholder="Celular:" id="celular" name="celular" value="{{$user->celular}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="campo__input">
                                        <label class="label__campos" for="e-mail">E-mail:</label>
                                        <input type="email" class="style__campo" placeholder="E-mail" id="e-mail" name="email" value="{{$user->email}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="campo__input ">
                                        <label class="label__campos" for="nome">Senha:</label>
                                        <input type="password" class="style__campo" placeholder="Senha:" id="password" name="password" required>
                                    </div>
                                </div>
                                @if(auth()->user()->tipo == 0)
                                    <div class="cliente__group">
                                        <div class="row">
                                            <div class="col-lg-12" style="text-align: start; margin-bottom: 20px">
                                                <b class="style__letras">Endereço</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="campo__input ">
                                                    <label class="label__campos" for="cep">CEP</label>
                                                    <input type="text" class="style__campo" placeholder="CEP*" id="cep" name="cep" required onchange="buscaCep()" value="{{$user->cep}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="segura__select ">
                                                    <label class="label__campos" for="uf">Estado</label>
                                                    <select class="sub__select" id="uf" name="uf" required>
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
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="campo__input">
                                                    <label class="label__campos" for="cidade">Cidade</label>
                                                    <input type="text" class="style__campo" name="cidade" placeholder="Cidade*" id="cidade" value="{{$user->cidade}}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="campo__input">
                                                    <label class="label__campos" for="numero">Número</label>
                                                    <input type="num" class="style__campo" name="num" placeholder="Número*" id="num" value="{{$user->num}}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="campo__input">
                                                    <label class="label__campos" for="bairro">Bairro</label>
                                                        <input type="text" class="style__campo" name="bairro" placeholder="Bairro*" id="Bairro" value="{{$user->bairro}}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="campo__input">
                                                    <label class="label__campos" for="rua">Endereço</label>
                                                    <input type="text" class="style__campo" name="rua" placeholder="Endereço*" id="rua" value="{{$user->rua}}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="campo__input ">
                                                    <label class="label__campos" for="complemento">Complemento</label>
                                                    <input type="text" class="style__campo" placeholder="Complemento" id="compl" name="compl" value="{{$user->compl}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="lim__estilo">
                                <button type="submit" class="btn__salvar">ALTERAR</button>
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