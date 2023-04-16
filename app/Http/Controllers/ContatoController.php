<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /*public function create()
    {
        return view('contato');
    }

    public function store(Request $request)
    {
        $contato = new Contato();
        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->telefone = $request->telefone;
        $contato->assunto = $request->assunto;
        $contato->mensagem = $request->mensagem;

        $contato->save();

        return redirect(route('contato'));
    }

    public function enviar(Request $request)
    {
        $messages = [
            'email.required' => 'E-mail é obrigatório!',
            'email.email' => 'Este e-mail não é um e-mail válido!',

            'password.required' => 'Senha é obrigatório!',
            'password.min_digits' => 'Senha deve possui no mínimo 6 caracteres!',
        ];
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','min_digits:6'],
        ], $messages);
 
        return back()->withErrors([
            'email' => 'Usuário ou senha não encontrados!',
        ])->onlyInput('email');
    }*/
}
