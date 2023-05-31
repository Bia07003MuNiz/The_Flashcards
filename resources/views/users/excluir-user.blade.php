<x-layout-base>
    <x-slot:title>
        Excluir de usuário
    </x-slot>
    <div class="container">
        <h1 class="teste">EXCLUIR {{$user->nome}}</h1>
        <h1> {{$user->nome}}
        <h1> {{$user->cpf}}</h1>
        <h1> {{$user->email}}</h1>
        <h1> {{$user->Celular}}</h1>
        <h1> {{$user->tipo}}</h1>
        <h1> {{$user->cep}}</h1>
        <h1> {{$user->uf}}</h1>
        <h1> {{$user->Cidade}}</h1>
        <h1> {{$user->num}}</h1>
        <h1> {{$user->Bairro}}</h1>
        <h1> {{$user->rua}}</h1>
        <h1> {{$user->compl}}</h1>
        
        <form action="{{route('users.destroy', $user)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Confirmar excluir</button>
        </form>
    </div>
</x-layout-base>