<x-layout-base>
    <x-slot:title>
        Lista de usuários
    </x-slot>
    <div class="container">
        <h1 class="titulo mt-3 mb-3">
        <span>RELATÓRIO DE CLIENTE CADASTRADO</span></h1>
       
        <table class="table table-striped table-hover">
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
                    @if ($user->tipo == 0)
                        <tr>
                            <td><a href="{{ route('users.show', $user) }}" style="text-decoration:none; color: #000">{{ $user->tipo }}</a></td>
                            <td><a href="{{ route('users.show', $user) }}" style="text-decoration:none; color: #000">{{ $user->nome }}</a></td>
                            <td><a href="{{ route('users.show', $user) }}" style="text-decoration:none; color: #000">{{ $user->email }}</a></td>
                            <td><a href="{{ route('users.show', $user) }}" style="text-decoration:none; color: #000">{{ $user->Celular }}</a></td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
<div class="text-center">
    <a href="javascript:history.back()" class="btn__style mt-2 mb-3">VOLTAR</a>
</div>

    </div>
</x-layout-base>
