<x-layout-base>
  <x-slot:title>
      Esqueci a senha 
  </x-slot>
  <main id="esqueci-senha">
    <div class="container">
      <h1 class="titulo"><span>ESQUECEU A SENHA</span></h1>
      <div class="centro_inicio"> 

<h2 class="campo_titulosegundo">
    <spain> Digite seu e-mail para receber um e-mail de recuperação. </sapin>
</h2>
</div>
      <form action="" method="POST">
        @csrf
        @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="radio_bton text_label justify-content-center">
          <span>Sou:</span>
          <div >
          <input class="text_label" type="radio" name="tipo" id="tipoCliente" value="1"> 
          <label class="text_check" for="tipoCliente">Cliente</label>
           
          </div>
          <div>
          <input class="text_label" type="radio" name="tipo" id="tipoVendedor" value="2"> 
          <label class="text_check" for="tipoVendedor">Vendedor</label>
           
          </div>
        </div>
        <div class="campos_input">
          <label class="sr-only" for="email">E-mail</label>
          <input class="estilo_campos" type="email" name="email" id="email" placeholder="E-mail">
        </div>
        <div class="btn_center">
          <button href="javascript:history.back()" class="estilo_botao">VOLTAR</button>
          <button type="submit" class="estilo_botao">ENVIAR</button>
        </div>
      </form>
    </div>
  </main>
</x-layout-base>