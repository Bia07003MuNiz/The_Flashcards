<x-layout-base>
    <x-slot:title>
        Edita usuário
    </x-slot>
    <div class="container">
        <h1>Editar usuário</h1>
        <form action="{{route('users.update',$user)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$user->nome}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{$user->cpf}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}">
            </div>
            Tipo:
            <div class="border">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" value="0" id="categoria0" {{$user->tipo==0?'checked':''}}>
                    <label class="form-check-label" for="categoria0">Cliente</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" value="1" id="categoria1" {{$user->tipo==1?'checked':''}}>
                    <label class="form-check-label" for="categoria1">Funcionário</label>
                </div>
            </div>
            <button class="btn btn-success" type="submit">Salvar</button>
        </form>
    </div>
</x-layout-base>