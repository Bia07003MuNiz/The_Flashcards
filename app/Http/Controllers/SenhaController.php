<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SenhaController extends Controller
{
    public function formulario()
    {
        return view('esqueci-a-senha');
    }

    public function alterarSenha(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nova_senha' => 'required|min:6',
        ]);

        // Verifica se o e-mail existe no banco de dados
        $usuario = User::where('email', $request->email)->first();

        if (!$usuario) {
            return redirect()->back()->withErrors(['email' => 'E-mail não encontrado.']);
        }

        // Atualiza a senha do usuário
        $usuario->update([
            'password' => Hash::make($request->nova_senha),
        ]);

        return redirect()->route('login')->with('success', 'Senha alterada com sucesso!');
    }
}