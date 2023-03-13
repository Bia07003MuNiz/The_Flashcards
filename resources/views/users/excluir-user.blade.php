<x-layout-base>
    <x-slot:title>
        Excluir de usuário
    </x-slot>
    <div class="container">
        <h1 class="teste">EXCLUIR {{$user->nome}}</h1>
        <h1> {{$user->nome}}</h1>
        <h1> {{$user->cpf}}</h1>
        <h1> {{$user->email}}</h1>
        <h1> {{$user->tipo}}</h1>
        
        <form action="{{route('users.destroy', $user)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Confirmar excluir</button>
        </form>
    </div>
</x-layout-base>