<x-layout-base>
    <x-slot:title>
        Lista de usuários
    </x-slot>
    <div class="container">
        <h1>LISTA DE USUÁRIOS</h1>
        <a href="{{route('users.create')}}">Novo Usuário</a>
             <table class="table table-striped table-hover" >
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
                            <td><a href="{{route('users.show',$user)}}" style="text-decoration:none; color: #000">{{$user->tipo}}</a></td>
                            <td><a href="{{route('users.show',$user)}}"  style="text-decoration:none; color: #000">{{$user->nome}}</a></td>
                            <td><a href="{{route('users.show',$user)}}"  style="text-decoration:none; color: #000">{{$user->email}}</a></td>
                            <td><a href="{{route('users.show',$user)}}"  style="text-decoration:none; color: #000">{{$user->Celular}}</a></td>
                            
                        </tr> 
                       
                @endforeach   

                </tbody>
            </table>
            </div>

        <a class="mx-auto" style=" position: center; width: 500px; height: 200px; color: orange;" href="javascript:history.back()">VOLTAR</a>
        
</div>
        </div>   

    </div>
</x-layout-base>