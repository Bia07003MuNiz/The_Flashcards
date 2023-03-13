<x-layout-base>
    <x-slot:title>
        Lista de usuários
    </x-slot>
    <div class="container">
        <h1>LISTA DE USUÁRIOS</h1>
        <a href="{{route('users.create')}}">Novo Usuário</a>
        <div class="list-group mt-5">
            @foreach ($users as $user)
                <a href="{{route('users.show',$user)}}" class="list-group-item list-group-item-action">{{$user->nome}}</a>
            @endforeach
        </div>
    </div>
</x-layout-base>