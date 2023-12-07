<x-layout-base>
  <x-slot:title>
      Esqueci a senha
  </x-slot>
  <h1 class="titulo mt-5"><span>ESQUECEU A SENHA</span></h1>
  <main class="form-signin m-auto " style="height: 425px; width: 500px; padding-top:15px;" >
        <div class="container Login" style="margin-top:50px;" >
      


    <!-- resources/views/esqueci-a-senha.blade.php -->
    <form method="POST" action="{{ url('/esqueci-a-senha') }}">

  @csrf


  <div class="form-floating">
    
    <input type="email" class="form-control" name="email" required>
    @error('email')
      <div>{{ $message }}</div>
  @enderror
    <label for="floatingInput">E-mail:</label>
    @error('email')
        <p class="text-danger text-sm italic mt-2">{{ $message }}</p>
    @enderror
</div>
<p></p>

<div class="form-floating">
  <input type="password" class="form-control" name="nova_senha" required>
  <label for="password">Nova Senha:</label>
  @error('nova_senha')
      <div>{{ $message }}</div>
  @enderror
</div>


<p></p>
<div class="d-flex justify-content-center">
  <button type="submit">Alterar Senha</button>
</div>
</form>

    </div>
  </main>
</x-layout-base>
