<x-layout-base>
    <x-slot:title>
        esqueceu a senha 
    </x-slot>

    @push('scss')
        <script src="https://cdn.tailwindcss.com"></script>
    @endpush


    <div class="container">
    <div class="bg-white shadow-lg p-10 w-1006" style= "position:relative; Left:25%;">
            <form action="{{route('logar')}}" method="POST" class="">
                @csrf
                <div class="text-left text-xl font-bold">ESQUECEU A SENHA</div>


                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                                <div class="text-center text-xl font-bold"> Digite seu e-mail para receber um e-mail de recuperação.</div>

                                <div class="text-blue-700 font-bold mb-2">
        <div class="flex justify-center">
          Sou:
          <label class="inline-flex items-center">
            <input type="radio" class="form-radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
            <span class="ml-2 text-blue-600">Cliente</span>
          </label>
          <label class="inline-flex items-center ml-6">
            <input type="radio" class="form-radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
            <span class="ml-2 text-blue-600">Vendedor</span>
          </label>
        </div>
                <div class="mt-8 flex">
                    <input class="ml-2 w-full rounded-lg border px-4 placeholder-blue-500" type="text" name="email" id="email" placeholder="E-mail"/>
                </div>
                
                          
            
                <div class="mt-11 flex justify-center">
                    <button type="submit" class="rounded-lg bg-purple-900 p-3 font-bold text-white  py-2 rounded-lg ml-2" >Entrar</button>
                </div>
                </form>
          </div>
          
    </div>
</x-layout-base>