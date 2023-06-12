<x-layout-base>
    <x-slot:title>
        Área restrita > Relatório > Pedidos por período
    </x-slot>
    <main id="contatos">
        <div class="container">
            <h1 class="titulo"><span>Área restrita</span></h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="javascript:history.back()"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar</a>
                    <div class="style__espacamento">
                        @include('menu-relatorios')
                        <form method="POST" action ="{{route('resultados-periodo')}}" >
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="campo__input">
                                        <label class="" for="dtinicial"> Data inicial</label>
                                        <input type="date" class="style__campo" name="dtinicial" placeholder="dtinicial" id="dtinicial">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="campo__input">
                                        <label class="" for="dtfinal"> Data final</label>
                                        <input type="date" class="style__campo" name="dtfinal" placeholder="dtfinal" id="dtfinal">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="segura__select">
                                        <label class="" for="status">Status</label>
                                        <select class="sub__select" id="status" name="status">
                                            <option selected disabled>Tudo</option>
                                            <option value="0">Recebido</option>
                                            <option value="1">Em andamento</option>
                                            <option value="2">Finalizado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit" class="btn__style">ENVIAR</button>
                                </div>
                            </div>
                        </form>
                        <!--
                        Nome do usuário
                        Produtos escolhidos
                        Data da solicitação
                        Status
                        Abrir tela para mudar o status
                        -->
                        @isset($resultados)
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Produtos</th>
                                        <th>Data</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resultados as $item)
                                        <tr>
                                            <td>{{$item->user->nome}}</td>
                                            <td>
                                                <ul>
                                                @foreach ($item->produtosOrcamentos as $produtoOrcamento)
                                                    <li>{{$produtoOrcamento->Produto->nome}} ({{$produtoOrcamento->quantidade}})</li>
                                                @endforeach
                                                </ul>
                                            </td>
                                            <td>{{$item->dataFormatada()}}</td>
                                            <td>{{$item->statusTexto()}}</td>
                                            <td>
                                                <a href=""><i class="fa-solid fa-pencil"></i></a>
                                                <a href=""><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Produtos</th>
                                        <th>Data</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        @endisset
                        <div class="btn__center">
                            <a href="javascript:history.back()" class="btn__style">VOLTAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />  
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>


</x-layout-base>