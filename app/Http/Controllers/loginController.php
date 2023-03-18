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
            'email.required' => 'Email é obrigatório',
            'email.email' => 'Este email não é um email válido',

            'password.required' => 'senha é obrigatório',
            'password.min_digits' => 'a senha possui no mínimo 6 caracteres',
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
