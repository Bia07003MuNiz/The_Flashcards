<x-layout-base>
    <x-slot:title>
        Info de usuário
    </x-slot>

    <h1 class="teste">USUÁRIO {{$user->nome}}</h1>
    <h1> {{$user->nome}}</h1>
    <h1> {{$user->cpf}}</h1>
    <h1> {{$user->email}}</h1>
    <h1> {{$user->tipo}}</h1>

    <a class="btn btn-danger" href="{{route('users.edit',$user)}}">Editar</a>
    <a class="btn btn-danger" href="{{route('users.aviso',$user)}}">Excluir</a>


</x-layout-base>