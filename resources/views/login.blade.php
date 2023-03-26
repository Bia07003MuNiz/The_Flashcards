<x-layout-base>
    <x-slot:title>
        Login
    </x-slot>

    @push('scss')
        <script src="https://cdn.tailwindcss.com"></script>
    @endpush

    <div class="container">
     <div class="bg-white shadow-lg p-10 w-1006" style= "position:relative; Left:25%;">
    <h1 class="text-2xl font-bold text-purple-900 text-left mb-8" style="font-size:40px;">LOGIN</h1>
    <div class="text-center text-xl font-bold" style="color:black; font-size: 20px;">Entre com seus dados</div>
    <br><br>
    <div class="mb-6">
      <div class="text-blue-700 font-bold mb-2">
        <div class="flex justify-center">
          Entrar como:
          <label class="inline-flex items-center">
            <input type="radio" class="form-radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
            <span class="ml-2 text-blue-600">Cliente</span>
          </label>
          <label class="inline-flex items-center ml-6">
            <input type="radio" class="form-radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
            <span class="ml-2 text-blue-600">Vendedor</span>
          </label>
        </div>
        <form action="{{route('logar')}}" method="POST">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="email"></label>
        <input class="appearance-none border rounded-md border-blue-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder-blue-500" id="email" name="email" type="email" placeholder="E-mail" />
        @error('email')
        <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="password"></label>
        <input class="appearance-none border rounded-md border-blue-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder-blue-500" id="password" name="password" type="password" placeholder="Senha" />
        @error('password')
        <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
        @enderror
    </div>
</form> 

          <div class="flex justify-end mb-2">
            <a href="#" class="btn btn-link text-black text-sm">Esqueceu sua senha?</a>
          </div>
          <div class="flex justify-center">
            <button type="submit" class="bg-purple-900 p-1 hover:bg-purple-900 text-white font-bold py-2 px-4 rounded-lg mr-2">
              CRIAR CONTA
            </button>
            <button type="button" class="bg-purple-900 p-1 hover:bg-purple-900 text-white font-bold py-2 px-4 rounded-lg ml-2">
              ENTRAR
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


</x-layout-base>