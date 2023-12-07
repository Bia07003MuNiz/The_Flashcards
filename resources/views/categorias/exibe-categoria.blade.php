<x-layout-base>
    <x-slot:title>
        Exibe cards {{$categoria->nome}}
    </x-slot>
      <main id="editar__categorias" class="area-restrita" style="height: 525px; margin: 0 auto;">

        <div class="container " style="margin-top: 120px;">
            <div class="bloco__segura">
                <div class="bloco__conteudo">
                    <div class="style__espacamento">
                        <form action="{{route('categorias.update',$categoria)}}" method="POST" id="form-edita-categoria">
                            @method('PUT')
                            @csrf

                            <div class="container">
                                <h1 class="pb-3">Exibe Card</h1>
                                <main class="form-signin w-50 m-auto p-">
                                        <div class="form-floating">
                                            <div type="text" class="form-control" placeholder="Nome*" id="nome" name="nome",required>{{$categoria->nome}}</div>
                                            <label for="floatingNome">Nome</label>
                                        </div>
                                        <p></p>
                                        <div class="form-floating">
                                            <div type="text" class="form-control" placeholder="Nome*" id="nome" name="nome",required>@if($categoria->destaque == 1) Habilitado @elseif($categoria->destaque == 0) Desabilitado @endif</div>
                                            <label for="floatingNome">Destaque</label>
                                        </div>
                                        <p></p>

                            <div class="lim__estilo2 d-flex justify-content-center ">
                                <button type="button" class="btn btn-outline-primary">
                                    <a class="btn__voltar" href="{{route('categorias.index')}}" style="text-decoration: none; color: black;">Voltar à listagem</a>
                                </button>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-layout-base>
