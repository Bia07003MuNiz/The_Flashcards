<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();

        return redirect(route('home'));

    }

    public function logar(Request $request): RedirectResponse
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
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('home'));
        }
 
        return back()->withErrors([
            'email' => 'Usuário ou senha não encontrados!',
        ])->onlyInput('email');
    }
}
