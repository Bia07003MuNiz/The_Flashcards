<x-layout-base>
    <x-slot:title>
        Login
    </x-slot>

    @push('scss')
        <script src="https://cdn.tailwindcss.com"></script>
    @endpush


    <div class="container">
        <div class="h-screen p-6">
            <form action="{{route('logar')}}" method="POST" class="m-auto rounded-lg p-6 bg-white  border border-gray-400">
                @csrf
                <div class="text-left text-xl font-bold" style= "padding-left:2%; color:#4C1D95">LOGIN</div>
                <div class="text-center text-xl font-bold" style= "padding-left:2%; color:black; font-size: 90%;">Entre com seus dados</div>
               
                <div>
                    <p class="align-middle" style=" display: inline-block; vertical-align: middle; ">Entrar como:</p>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
                    <label class="form-check-label" for="inlineRadio1">Cliente</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                    <label class="form-check-label" for="inlineRadio2">Vendedor</label>
                </div>

     
                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="col-6">
                <input class="ml-2 w-full rounded-lg border px-4 placeholder-blue-500" type="text" name="email" id="email" placeholder="E-mail" />

                </div>
                
                @error('password')
                    <div class="alert alert-danger">Senha é obrigatório!</div>
                @enderror
               <div class="col-6">
                     <input class="ml-2 w-full rounded-lg border px-4 placeholder-blue-500" type="password" name="password" id="password" placeholder="Senha" />
               </div>
            
                <div class="mt-11 flex justify-center">
  <button type="submit" class="rounded-md bg-purple-900 p-1 font-bold text-white mr-2 h-8">CRIAR CONTA</button>
  <button type="submit" class="rounded-md bg-purple-900 p-1 font-bold text-white ml-2 h-8">ENTRAR</button>
</div>
                </form>
          </div>
          
    </div>
</x-layout-base>