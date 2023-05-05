<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

if (isset($_POST['ok'])) {
    $email = $_POST['email'];
    $erro = [];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro[] = "E-mail inválido.";
    }

    $result = DB::table('users')->select('senha', 'codigo')->where('email', $email)->first();
    $total = $result ? 1 : 0;

    if ($total == 0) {
        $erro[] = "O e-mail informado não existe no banco de dados.";
    }

    if (count($erro) == 0 && $total > 0) {
        $novasenha = substr(md5(time()), 0, 6);
        $nscriptografada = md5(md5($novasenha));

        try {
            Mail::send([], [], function ($message) use ($email, $novasenha) {
                $message->to($email)->subject('Sua nova senha')->setBody("Sua nova senha: {$novasenha}");
            });
            DB::table('users')->where('email', $email)->update(['password' => $nscriptografada]);
            $erro[] = "Senha alterada com sucesso!";
        } catch (\Throwable $th) {
            $erro[] = "Erro ao enviar e-mail de recuperação de senha.";
        }
    }
}
?>

<x-layout-base>
  <x-slot:title>
      Esqueci a senha 
  </x-slot>
  <main id="esqueci-senha">
    <div class="container">
      <h1 class="titulo"><span>ESQUECEU A SENHA</span></h1>
      <div class="centro_inicio"> 

<h2 class="campo_titulosegundo">
    <spain> Digite seu e-mail para receber um e-mail de recuperação. </sapin>
</h2>
</div>
<form method="POST" action="{{ route('forgot-password') }}">
    @csrf
        @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="radio_bton text_label justify-content-center">
          <span>Sou:</span>
          <div >
            <input class="text_label" type="radio" name="tipo" id="tipoCliente" value="1"> 
            <label class="text_check" for="tipoCliente">Cliente</label>
          </div>
          <div>
          <input class="text_label" type="radio" name="tipo" id="tipoVendedor" value="2"> 
          <label class="text_check" for="tipoVendedor">Vendedor</label>
            </div>
        </div>
        <div class="campos_input">
          <label class="sr-only" for="email">E-mail</label>
          <input class="estilo_campos"  type="email" name="email" id="email" placeholder="E-mail">
        </div>
        <div class="btn_center">
          <button href="javascript:history.back()" class="estilo_botao">VOLTAR</button>
          <button type="submit" class="estilo_botao">ENVIAR</button>
        </div>
      </form>
    </div>
  </main>
</x-layout-base>