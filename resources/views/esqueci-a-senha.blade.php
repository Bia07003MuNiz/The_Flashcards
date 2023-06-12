<x-layout-base>
  <x-slot:title>
      Esqueci a senha 
  </x-slot>
  <main id="esqueci-senha">
    <div class="container">
      <h1 class="titulo"><span>ESQUECEU A SENHA</span></h1>
      <form class="style__form" method="POST" action="{{ route('forgot-password') }}">
          @csrf
          <h2 class="campo_titulosegundo">Digite seu e-mail para receber um e-mail de recuperação.</h2>
          @error('email')
            <div class="alert alert-danger">Não encontramos um usuário com este e-mail cadastrado.</div>
          @enderror
          @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @endif
          <div class="campos_input">
            <label class="sr-only" for="email">E-mail</label>
            <input class="estilo_campos"  type="email" name="email" id="email" placeholder="E-mail" required>
          </div>
          <div class="btn_center">
            <a href="javascript:history.back()" class="estilo_botao" style="text-align: center">VOLTAR</a>
            <button type="submit" class="estilo_botao">ENVIAR</button>
          </div>
      </form>
    </div>
  </main>
</x-layout-base>