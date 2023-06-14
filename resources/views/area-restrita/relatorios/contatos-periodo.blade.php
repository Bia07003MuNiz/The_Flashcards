<x-layout-base>
    <x-slot:title>
        Área restrita > Relatório > Contatos por período
    </x-slot>
    <main id="contatos" class="area-restrita">
        <div class="container">
            <h1 class="titulo"><span>Área restrita</span></h1>
            <div class="bloco__segura">
                @include('menu-area-restrita')
                <div class="bloco__conteudo">
                    <a class="btn__voltar" href="javascript:history.back()"><i class="fa-solid fa-share fa-flip-horizontal"></i>Voltar</a>
                    <div class="style__espacamento">
                        @include('menu-relatorios')
                        <form method="POST" action ="{{route('resultados-contatos-periodo')}}" >
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
                                            <option selected disabled>Assunto*</option>
                                            <option>Reclamações</option>
                                            <option>Dúvidas</option>
                                            <option>Sugestões</option>
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
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Telefone</th>
                                        <th>Assunto</th>
                                        <th>Mensagem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resultados as $item)
                                        <tr>
                                            <td>{{$item->nome}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->telefone}}</td>
                                            <td>{{$item->assunto}}</td>
                                            <td>{{$item->mensagem}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Telefone</th>
                                        <th>Assunto</th>
                                        <th>Mensagem</th>
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