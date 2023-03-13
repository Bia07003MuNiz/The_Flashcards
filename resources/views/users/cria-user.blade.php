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
            <button class="btn btn-success" type="submit">Salvar</button>
        </form>
    </div>
</x-layout-base>