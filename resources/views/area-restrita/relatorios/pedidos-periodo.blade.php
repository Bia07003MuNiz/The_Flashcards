<x-layout-base>
    <x-slot:title>
        Contato
    </x-slot>
    <main id="contatos">
        <div class="container">
            <h1 class="titulo"><span>RELATÓRIO POR PERÍODO</span></h1>
             <form method="POST" action ="{{route('resultados-periodo')}}" >
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <div class="campo__input">
                            <label class="" for="dtinicial"> Data inicial</label>
                                <input type="date" class="style__campo" name="dtinicial" placeholder="dtinicial" id="dtinicial">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="campo__input">
                            <label class="" for="dtfinal"> Data final</label>
                                <input type="date" class="style__campo" name="dtfinal" placeholder="dtfinal" id="dtfinal">
                        </div>
                    </div>
                    <div class="col-lg-4">
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
                </div>
                <div class="btn__center">
                    <a href="javascript:history.back()" class="btn__style">VOLTAR</a>
                    <button type="submit" class="btn__style">ENVIAR</button>
                </div>
            </form>
        </div>
    </main>
</x-layout-base>