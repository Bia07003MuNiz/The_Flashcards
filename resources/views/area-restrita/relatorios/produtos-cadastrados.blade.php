<x-layout-base>
    <x-slot:title>
        Área restrita > Relatório > Produtos cadastrados
    </x-slot>
    <main id="relatorio__produtos__cadastrados" class="area-restrita relatorios">
        <div class="container">
            <h1 class="titulo"><span>Área restrita</span></h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="javascript:history.back()"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar</a>
                    <div class="style__espacamento">
                        @include('menu-relatorios')
                        <h3>Produtos cadastrados</h3>
                        @isset($produtos)
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Categorias</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produtos as $produto)
                                        <tr>
                                            <td>{{ $produto->codigo }}</td>
                                            <td>{{ $produto->nome }}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($produto->categorias as $categoria)
                                                        <li>{{$categoria->nome}}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>R$ {{ number_format($produto->valor, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Categorias</th>
                                        <th>Valor</th>
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