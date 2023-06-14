<x-layout-base>
    <x-slot:title>
        Área restrita > Relatório > Clientes cadastrados
    </x-slot>
    <main id="relatorio__clientes__cadastrados" class="area-restrita relatorios">
        <div class="container">
            <h1 class="titulo">
                <span>Área restrita</span>
            </h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="javascript:history.back()"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar</a>
                    <div class="style__espacamento">
                        @include('menu-relatorios')
                        <h3>Clientes cadastrados</h3>
                        @isset($users)
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>CPF</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Celular</th>
                                        <th>CEP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        @if ($user->tipo == 0)
                                            <tr>
                                                <td>{{ $user->cpf }}</td>
                                                <td>{{ $user->nome }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->celular }}</td>
                                                <td>{{ $user->cep }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>CPF</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Celular</th>
                                        <th>CEP</th>
                                    </tr>
                                </tfoot>
                            </table>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />  
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable( {
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
                    },
                    paging: true,
                    ordering: true,
                });
        });
    </script>
</x-layout-base>