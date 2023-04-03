<x-layout-base>
    <x-slot:title>
        esqueceu a senha 
    </x-slot>

    @push('scss')
          <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>

    @endpush


    <div class="container py-5">
  <div class="row justify-content-center">
  <div class="col-md-8 col-lg-6">
     <form action="{{ route('logar') }}" method="POST" class="">
      @csrf
      <h1 class="text-2xl font-bold text-purple-900 text-left mb-8" style="font-size: 40px;">ESQUECEU A SENHA</h1>

      @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      <p class="text-lg font-semibold text-dark text-center">Digite seu e-mail para receber um e-mail de recuperação.</p>

      <div class="text-primary font-weight-bold mt-4">
        <div class="d-flex justify-content-center">
          Sou:
          <label class="form-check-inline mx-1">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
            <span class="ml-2 text-blue-600">Cliente</span>
          </label>
          <label class="form-check-inline mx-1">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
            <span class="ml-2 text-blue-600">Vendedor</span>
          </label>
        </div>
      </div>

      <div class="mt-4">
  <input class="form-control rounded-pill  border-blue px-3 text-blue" type="text" name="email" id="email" placeholder="E-mail">
</div>


      <div class="mt-11 d-flex justify-content-end">
    <button type="submit" class="btn btn-purple rounded-lg ml-2" style="color: white; background-color: #5a258e;">VOLTAR</button>
    <button type="submit" class="btn btn-purple rounded-lg ml-2" style="color: white; background-color: #5a258e;">ENTRAR</button>
</div>


    </form>
  </div>
</div>
</x-layout-base>