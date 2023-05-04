<x-layout-base>
  <x-slot:title>
      Login
  </x-slot>
  <main id="login">
    <div class="container">
      <h1 class="titulo"><span>LOGIN</span></h1>
      <div class="centro_inicio">
        <h2 class="campo_titulosegundoo">
            <spain>Entre com seus dados </sapin>
        </h2>
      </div>

      <div class="radio_bton text_label justify-content-center">
          <span>Entrar como:</span>
          <div >
          <input class="text_label" type="radio" name="tipo" id="tipoCliente" value="1"> 
          <label class="text_check" for="tipoCliente">Cliente</label>
           
          </div>
          <div>
          <input class="text_label" type="radio" name="tipo" id="tipoVendedor" value="2"> 
          <label class="text_check" for="tipoVendedor">Vendedor</label>
           
          </div>
        </div>

      <form action="{{route('logar')}}" method="POST">
        @csrf
        <div class="campos_input ">
          <label class="sr-only" for="email">E-mail</label>
          <input class="estilo_campos" id="email" name="email" type="email" placeholder="E-mail">
          @error('email')
            <p class="text-danger text-sm italic mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div class="campos_input ">
          <label class="sr-only" for="password">Senha</label>
          <input class="estilo_campos" id="password" name="password" type="password" placeholder="Senha" />
          @error('password')
            <p class="text-danger text-sm italic mt-2">{{ $message }}</p>
          @enderror
        </div>

        <div class="esqueceu_senha">
          <a href="{{route('esqueci-senha')}}" class="esqueceu_senha">Esqueceu sua senha?</a>
        </div>
        <div class="btn_center">
          <button href="{{route('cadastre-se')}}" class="estilo_botao">CRIAR CONTA</button>
          <button type="submit" class="estilo_botao">ENTRAR</button>
        </div>
        <br>
        <br>
      </form>
    </div>
  </main>
</x-layout-base>