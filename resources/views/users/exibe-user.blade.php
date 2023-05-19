<x-layout-base>
    <x-slot:title>
        Info de usuário
    </x-slot>
    <div class="container">
        <h1 class="titulo"><span>USUÁRIO é  {{$user->tipo}}</span></h1>

        <h1 class="mt-5"> DADOS PESSOAIS</h1>
        <table class="table table-striped" >
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Celular</th>
                        <th scope="col">E-mail</th>
                        
                    </tr>
                </thead>
                <tbody>
              
                
                    <tr>

                        <td>{{$user->nome}}</td>
                        <td>{{$user->cpf}}</td>
                        <td>{{$user->Celular}}</td>
                        <td>{{$user->email}}</td>
                    </tr>    
               
                </tbody>
            </table>

            <h1 class="mt-5"> ENDEREÇO </h1>
        <table class="table table-striped" >
                <thead>
                    <tr>
                        <th scope="col">CEP</th>
                        <th scope="col">ESTADO</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Rua</th>
                        <th scope="col">Número</th>
                        <th scope="col">Complemento</th>
                       
                    </tr>
                </thead>
                <tbody>
              
                
                    <tr>

                        <td>{{$user->cep}}</td>
                        <td>{{$user->uf}}</td>
                   
                        <td>{{$user->Cidade}}</td>
                        <td> {{$user->Bairro}}</td>
                        <td> {{$user->rua}}</td>
                        <td> {{$user->num}}</td>
                        <td> {{$user->compl}}</td>
                    </tr>    
               
                </tbody>
            </table>
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


        <a class="btn btn-danger" href="{{route('users.edit',$user)}}">Editar</a>
        <a class="btn btn-danger" href="{{route('users.aviso',$user)}}">Excluir</a>
        <a class="btn__style" href="javascript:history.back()">VOLTAR</a>
    </div>
</x-layout-base>