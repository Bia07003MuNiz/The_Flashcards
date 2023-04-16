<x-layout-base>
  <x-slot:title>
      Esqueci a senha 
  </x-slot>
  <main id="esqueci-senha">
    <div class="container">
      <h1 class="titulo"><span>ESQUECEU A SENHA</span></h1>
      <p class="">Digite seu e-mail para receber um e-mail de recuperação.</p>
      <form action="" method="POST">
        @csrf
        @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="">
          <span>Sou:</span>
          <div>
            <label class="" for="tipoCliente">Cliente</label>
            <input class="" type="radio" name="tipo" id="tipoCliente" value="1">
          </div>
          <div>
            <label class="" for="tipoVendedor">Vendedor</label>
            <input class="" type="radio" name="tipo" id="tipoVendedor" value="2">
          </div>
        </div>
        <div class="">
          <label class="sr-only" for="email">E-mail</label>
          <input class="" type="email" name="email" id="email" placeholder="E-mail">
        </div>
        <div class="">
          <a href="javascript:history.back()" class="">VOLTAR</button>
          <button type="submit" class="">ENVIAR</button>
        </div>
      </form>
    </div>
  </main>
</x-layout-base>