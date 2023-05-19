<x-layout-base>
    <x-slot:title>
        Lista de usuários
    </x-slot>
    <div class="container">
        <h1>LISTA DE USUÁRIOS</h1>
        <a href="{{route('users.create')}}">Novo Usuário</a>
        <div class="list-group mt-5">
            @foreach ($users as $user)
                <a href="{{route('users.show',$user)}}" class="list-group-item list-group-item-action">{{$user->nome}}  - {{$user->email}}</a>
            @endforeach

        <div>
            <table class="table table-striped" >
                <thead>
                    <tr>
                        <th scope="col">Tipo</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Celular</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                
                    <tr>
                        <td>{{$user->tipo}}</td>
                        <td>{{$user->nome}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->Celular}}</td>
                    </tr>    
                @endforeach   
                </tbody>
            </table>
        </div>   

        </div>
        <div class="ml-auto" style="width: 200px; height: 200px">
        <a class="btn__style" href="javascript:history.back()">VOLTAR</a>
        
</div>
    </div>
</x-layout-base>