<x-layout-base>
    <x-slot:title>
        Info de usuário
    </x-slot>
    <div class="container">
        <h1 class="teste">USUÁRIO {{$user->nome}}</h1>
        <h1> {{$user->nome}}</h1>
        <h1> {{$user->cpf}}</h1>
        <h1> {{$user->email}}</h1>
        <h1> {{$user->tipo}}</h1>

        <h1> {{$user->cep}}</h1>
        <h1> {{$user->uf}}</h1>
        <h1> {{$user->Cidade}}</h1>
        <h1> {{$user->num}}</h1>
        <h1> {{$user->Bairro}}</h1>
        <h1> {{$user->rua}}</h1>
        <h1> {{$user->compl}}</h1>


        <a class="btn btn-danger" href="{{route('users.edit',$user)}}">Editar</a>
        <a class="btn btn-danger" href="{{route('users.aviso',$user)}}">Excluir</a>
        <a class="btn__style" href="javascript:history.back()">VOLTAR</a>
    </div>
</x-layout-base>