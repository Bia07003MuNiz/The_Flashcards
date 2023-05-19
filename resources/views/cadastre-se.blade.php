

<x-layout-base>
    <x-slot:title>
        Cadastro de usuário
    </x-slot>
    <div class="container">
        <h1>Cadastro</h1>
        <form action="{{route('users.store')}}" method="POST">
            @method('POST')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            Tipo:
            <div class="border">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" value="0" id="categoria0">
                    <label class="form-check-label" for="categoria0">Cliente</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" value="1" id="categoria1">
                    <label class="form-check-label" for="categoria1">Funcionário</label>
                </div>

            </div>            
            <br/>

ENDEREÇO:<br/>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">CEP</label>
<input type="text" class="form-control" id="cep" name="cep">
</div>

<div class="mb-3">


<label class="form-label" for="exampleInputEmail1"> Estado</label>
                <select class="form-control" id="uf" name="uf">
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
            
<div class="mb-2">
<label for="exampleInputEmail1" class="form-label">Cidade</label>
<input type="text" class="form-control" id="Cidade" name="Cidade">
</div>

<div class="mb-2">
<label for="exampleInputEmail1" class="form-label">Numero</label>
<input type="num" class="form-control" id="num" name="num">
</div>

<div class="mb-2">
<label for="exampleInputEmail1" class="form-label">Bairro</label>
<input type="text" class="form-control" id="Bairro" name="Bairro">
</div>


<div class="mb-2">
<label for="exampleInputEmail1" class="form-label">Rua</label>
<input type="text" class="form-control" id="rua" name="rua">
</div>

<div class="mb-2">
<label for="exampleInputEmail1" class="form-label">Complemento</label>
<input type="text" class="form-control" id="compl" name="compl">
</div>   
            <div class="col-lg-6 custom__checkbox">
                        <input class="rodape__check" type="checkbox" name="termos" id="contato__termos">
                        <label class="rodape__check__label" for="contato__termos">
                            Eu li e concordo com os <a href="termos-de-uso">termos e condições de uso</a>.
                        </label>			
                    </div>
                    <button class="btn btn-success" type="submit">Salvar</button>
            </div>
        
        </form>
    </div>
</x-layout-base>  
