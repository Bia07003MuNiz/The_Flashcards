<x-layout-base>
    <x-slot:title>
        esqueceu a senha 
    </x-slot>

    @push('scss')
        <script src="https://cdn.tailwindcss.com"></script>
    @endpush


    <div class="container">
        <div class="h-screen p-6">
            <form action="{{route('logar')}}" method="POST" class="m-auto rounded-lg p-6 bg-gray-300">
                @csrf
                <div class="text-center text-xl font-bold">esqueceu senha </div>


                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="mt-8 flex">
                    <label for="" class="font-bold">email:</label>
                    <input class="ml-2 w-full rounded-lg border px-4" type="text" name="email" id="email" />
                </div>
                
                @error('password')
                    <div class="alert alert-danger">Senha é obrigatório!</div>
                @enderror
                <div class="mt-8 flex">
                    <label for="" class="font-bold">Senha:</label>
                    <input class="ml-2 w-full rounded-lg border px-4" type="password" name="password" id="password" />
                </div>

                <div class="mt-8 flex">
    <label for="" class="font-bold">confirmar senha:</label>
    <input class="ml-2 w-full rounded-lg border px-4" type="password" name="password_confirmation" id="password_confirmation" />
</div>

            
            
                <div class="mt-11 flex justify-center">
                    <button type="submit" class="rounded-lg bg-blue-600 p-3 font-bold text-white">Entrar</button>
                </div>
                </form>
          </div>
          
    </div>
</x-layout-base>