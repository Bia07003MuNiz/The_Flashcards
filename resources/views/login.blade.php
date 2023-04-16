<x-layout-base>
    <x-slot:title>
        Login
    </x-slot>
    <main id="login">
      <div class="container">
        <h1 class="titulo"><span>LOGIN</span></h1>
        <p class="">Entre com seus dados</p>
        <form action="{{route('logar')}}" method="POST">
          @csrf
          <div class="">
            <span>Entrar como:</span>
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
            <input class="" id="email" name="email" type="email" placeholder="E-mail">
            @error('email')
              <p class="text-danger text-sm italic mt-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="">
            <label class="sr-only" for="password">Senha</label>
            <input class="" id="password" name="password" type="password" placeholder="Senha" />
            @error('password')
              <p class="text-danger text-sm italic mt-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="">
            <a href="{{route('esqueci-senha')}}" class="">Esqueceu sua senha?</a>
          </div>
          <div class="">
            <a type="submit" href="{{route('cadastre-se')}}" class="">CRIAR CONTA</button>
            <button type="submit" class="">ENTRAR</button>
          </div>
        </form>
      </div>
    </main>
</x-layout-base>