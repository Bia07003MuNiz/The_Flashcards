<x-layout-base>
    <x-slot:title>
        Login
    </x-slot>

    @push('scss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    @endpush

    <div class="container">
  <div class="bg-light shadow p-10 w-75" style= "position:relative; Left:15%;">
    <h1 class="text-2xl font-bold text-purple-900 text-left mb-8" style="font-size:40px;">LOGIN</h1>
    <div style="text-align:center;">
      <p class="text-lg font-semibold text-dark">Entre com seus dados</p>
    </div>
    <br><br>
    <div class="mb-6">
      <div class="text-primary font-bold mb-2">
        <div class="flex justify-center">
          Entrar como:
          <label class="inline-flex items-center">
            <input type="radio" class="form-radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
            <span class="ml-2 text-primary">Cliente</span>
          </label>
          <label class="inline-flex items-center ml-6">
            <input type="radio" class="form-radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
            <span class="ml-2 text-primary">Vendedor</span>
          </label>
        </div>
        <form action="{{route('logar')}}" method="POST">
          @csrf
          <div class="mb-4">
            <input class="form-control rounded-pill border-blue px-3 text-primary" id="email" name="email" type="email" placeholder="E-mail" />
            @error('email')
            <p class="text-danger text-sm italic mt-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4">
            <input class="form-control rounded-pill border-blue px-3 text-primary" id="password" name="password" type="password" placeholder="Senha" />
            @error('password')
            <p class="text-darger text-sm italic mt-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4 d-flex justify-content-end">
          <a href="#" class="btn btn-link text-black text-sm">Esqueceu sua senha?</a>
         </div>

           <div class="mt-11 d-flex justify-content-end">
            <button type="submit" class="btn btn-purple rounded-lg ml-2" style="color: white; background-color: #5a258e;">CRIAR CONTA</button>
            <button type="submit" class="btn btn-purple rounded-lg ml-2" style="color: white; background-color: #5a258e;">ENTRAR</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



</x-layout-base>