<x-layout-base>
    <x-slot:title>
        login
    </x-slot>
    <main class="form-signin m-auto " style="height: 535px; width: 500px; padding-top:15px;" >
        <div class="container Login" style="margin-top:120px;" >

            <form class="style__form" action="{{ route('logar') }}" method="POST">
                @csrf
                <h1>LOGIN</h1>
                <div class="form-floating">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" type="email"
                            placeholder="E-mail">
                        <label for="floatingInput">E-mail</label>
                        @error('email')
                            <p class="text-danger text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <p></p>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" type="password"
                            placeholder="Senha" />
                        <label for="password">Senha</label>
                        @error('password')
                            <p class="text-danger text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <p></p>
                    <div class="btn_center">
                        <button type="submit" class="btn btn-primary w-100 py-">ENTRAR</button>
                    </div>
                    <p></p>
                    <p></p>
                    <a href="/esqueci-a-senha" class="senha">Esqueci minha senha </a>
            </form>
        </div>
    </main>
</x-layout-base>
