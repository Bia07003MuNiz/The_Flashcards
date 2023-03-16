<x-layout-base>
    <x-slot:title>
        Login
    </x-slot>
    <div class="container">
        <form class="form-signin">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Por favor, inscreva-se</font></font></h1>
            <label for="inputEmail" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Endereço de email</font></font></label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de email" required="" autofocus="">
            <label for="inputPassword" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Senha</font></font></label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lembre de mim
              </font></font></label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrar</font></font></button>
            <p class="mt-5 mb-3 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2017-2018</font></font></p>
          </form>
    </div>
</x-layout-base>