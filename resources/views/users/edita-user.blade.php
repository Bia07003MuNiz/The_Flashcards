<x-layout-base>
    <x-slot:title>
        Área restrita > Meus dados
    </x-slot>
    <main id="meus__dados">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                <div class="bloco__menu">
                    @auth
                        <a class="menu__item {{ Request::is('users*') ? 'active' : '' }}" href="{{route('users.edit',$user)}}">Meus dados</a>
                        @if(auth()->user()->tipo == 0)
                            <a class="menu__item " href="">Meus pedidos</a>
                        @elseif(auth()->user()->tipo == 1)
                            <a class="menu__item {{ Request::is('categorias*') ? 'active' : '' }}" href="{{route('categorias.index')}}">Categorias</a>
                            <a class="menu__item {{ Request::is('produtos*') ? 'active' : '' }}" href="{{route('produtos.index')}}">Produtos</a>
                            <a class="menu__item " href="">Relatórios</a>
                        @endif
                    @endauth
                </div>
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="javascript:history.back()"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar</a>
                    <div class="style__espacamento">
                        <h2 class="title__box">Meus dados cadastrais</h2>
                        <form action="{{route('users.update',$user)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="campo__input">
                                        <label for="nome">Nome:</label>
                                        <input type="text" class="style__campo" placeholder="Nome:" id="nome" name="nome" value="{{$user->nome}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="campo__input">
                                        <label for="CPF">CPF:</label>
                                        <input type="text" class="style__campo" placeholder="CPF:" id="cpf" name="cpf" value="{{$user->cpf}}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="campo__input">
                                        <label class="sr-only" for="telefone"> Telefone:</label>
                                        <input type="tel" class="style__campo" placeholder="Telefone:" id="telefone" name="TELEFONE" value="{{$user->celular}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="campo__input">
                                        <label class="sr-only" for="e-mail">E-mail:</label>
                                        <input type="email" class="style__campo" placeholder="E-mail" id="e-mail" name="email" value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="campo__input ">
                                        <label class="sr-only" for="nome">Senha:</label>
                                        <input type="password" class="style__campo" placeholder="Senha:" id="senha" name="senha">
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
                                                    <label class="sr-only" for="cep">CEP</label>
                                                    <input type="text" class="style__campo" placeholder="CEP*" id="cep" name="cep" required onchange="buscaCep()">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="segura__select ">
                                                    <label class="sr-only" for="uf">Estado</label>
                                                    <select class="sub__select" id="uf" name="uf">
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
                                                    <input type="text" class="style__campo" name="Cidade" placeholder="Cidade*" id="Cidade" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="campo__input">
                                                    <label class="sr-only" for="numero"></label>
                                                    <input type="num" class="style__campo" name="num" placeholder="Número*" id="num">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="campo__input">
                                                    <label class="sr-only" for="bairro">Bairro</label>
                                                        <input type="text" class="style__campo" name="bairro" placeholder="Bairro*" id="Bairro" required>
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
</x-layout-base>