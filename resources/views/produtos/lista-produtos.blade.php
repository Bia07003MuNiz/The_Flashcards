<x-layout-base>
    <x-slot:title>
        Lista de produtos
    </x-slot>
    <main>
        <div class="container">
            <h1 class="titulo"><span>NOSSOS PRODUTOS</span></h1>
            @auth
                <a href="{{route('produtos.create')}}">Novo Produto</a>
            @endauth
            <div class="row">
                @foreach ($produtos as $produto)
                    @livewire('lv-card-produto', ['produto'=>$produto])
                @endforeach
                <div class="row">
                <div class="col-12 col-md-5">
                    <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                        <div class="input-group input-group-sm w-800">
                            <input type="text" class="from-control " placeholder="digite o produto">
                            <button class="btn btn-danger">BUSCAR</button>
                        </div>
                    </from>
                </div>
    <div class="col-12 col-md-7">
        <div class="d-flex flex-row-reverse justify-content-center justify-content-md-star">
            
            <nav class="d-inline-block">
                <ul class="pagination pagination-sm my-0">
                    <li class="page-item">
                        <button class="page-link">1</button>
                    </li>
                    <li class="page-item">
                        <button class="page-link">2</button>
                    </li>
                    <li class="page-item">
                        <button class="page-link ">3</button>
                    </li>
                    <li class="page-item">
                        <button class="page-link">4</button>
                    </li>
        </div>
    </div>
    </div>
   
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex aling-items-stretch">
                    <div class="card text-center bg-light">
                                             
                        <img src="assets/images/produtos/carne.jpg" classe="card-img-top">
                        <div class="card-header">
                            R$30,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">CARNE BOLVINA</h5>
                            <p class="card-text">
                                Carne bolvina congelada da melhor qualidade, por R$30,50 o kg aprovei e compra já o seu 
                            </p>
                        </div>
                        <div class="card-footer">
                            
                            <small class="teste-success"> estoque: 300</small>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex aling-items-stretch">
                    <div class="card text-center bg-light">
                                             
                        <img src="assets/images/produtos/carnemoida.jpg" classe="card-img-top">
                        <div class="card-header">
                            R$20,00
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">CARNE MOIDA</h5>
                            <p class="card-text">
                                Carne moida bolivina congelada da melhor qualidade, por R$20,00 o kg aprovei e compra já o seu 
                            </p>
                        </div>
                        <div class="card-footer">
                            
                            <small class="teste-success"> estoque: 500</small>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex aling-items-stretch">
                    <div class="card text-center bg-light">
                                             
                        <img src="assets/images/produtos/paodequeijo.jpg" classe="card-img-top">
                        <div class="card-header">
                            R$15,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">PÃO DE QUEIJO</h5>
                            <p class="card-text">
                                Pão de queijo congelado da melhor qualidade, por R$15,50 o kg aprovei e compra já o seu 
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="teste-success"> estoque: 250</small>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex aling-items-stretch">
                    <div class="card text-center bg-light">
                                             
                        <img src="assets/images/produtos/coxdefrango.jpg" classe="card-img-top">
                        <div class="card-header">
                            R$20,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">COXINHA CONGELADA</h5>
                            <p class="card-text">
                                Coxinha congelada da melhor qualidade, por R$20,50 o kg aprovei e compra já o seu 
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="teste-success"> estoque: 350</small>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex aling-items-stretch">
                    <div class="card text-center bg-light">
                                             
                        <img src="assets/images/produtos/milhocongelado.jpg" classe="card-img-top">
                        <div class="card-header">
                            R$10,00
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MILHO</h5>
                            <p class="card-text">
                                milho congelada da melhor qualidade, por R$10,00 o kg aprovei e compra já o seu 
                            </p>
                        </div>
                        <div class="card-footer">
                            
                            <small class="teste-success"> estoque: 300</small>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex aling-items-stretch">
                    <div class="card text-center bg-light">
                                             
                        <img src="assets/images/produtos/coxas.jpg" classe="card-img-top">
                        <div class="card-header">
                            R$30,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> COXAS CONGELADAS </h5>
                            <p class="card-text">
                                Coxas congelados da melhor qualidade, por R$30,50 o kg aprovei e compra já o seu 
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="teste-success"> estoque: 150</small>
                        </div>

                    </div>
                </div>
            </div>
        <div class="btn">
          <a class="btn__style" href="javascript:history.back()">VOLTAR</a>
        </div>

    
    </div>
        
    </main>
</x-layout-base>