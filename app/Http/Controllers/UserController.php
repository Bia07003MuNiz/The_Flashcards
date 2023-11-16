<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('users.lista-users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastre-se');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) { // Verifique se a solicitação é um POST
            // Verifique se o email já existe no banco de dados
            $existingUser = User::where('email', $request->email)->first();
    
            if ($existingUser) {
                // Se o email já existe, retorne uma mensagem de erro
                return redirect()->route('cadastre-se')->with('error', 'O email já existe. Por favor, use outro email.');
            }
        $user = new User();
        $user->tipo = $request->tipo;
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->celular = $request->celular;
        
        if(!empty($request->genero)){
            $user->genero = $request->genero;
        }

        if(!empty($request->uf)){
            $user->uf = $request->uf;
        }

        if(!empty($request->cidade)){
            $user->cidade = $request->cidade;
        }
        if(!empty($request->rua)){
            $user->rua = $request->rua;
        }

        if(!empty($request->num)){
            $user->num = $request->num;
        }

        if(!empty($request->bairro)){
            $user->bairro = $request->bairro;
        }       

        

        $user->save();
        return redirect(route('login'))->with('success', 'Cadastro efetuado com sucesso. Faça o login.');
    }
    }
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    
    {
       
        return view('users.exibe-user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edita-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->nome = $request->nome;
        $user->cpf = $request->cpf;
        $user->celular = $request->celular;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if(!empty($request->cep)){
            $user->cep = $request->cep;
        }

        if(!empty($request->uf)){
            $user->uf = $request->uf;
        }

        if(!empty($request->cidade)){
            $user->cidade = $request->cidade;
        }

        if(!empty($request->num)){
            $user->num = $request->num;
        }

        if(!empty($request->bairro)){
            $user->bairro = $request->bairro;
        }

        if(!empty($request->rua)){
            $user->rua = $request->rua;
        }

        if(!empty($request->compl)){
            $user->compl= $request->compl;
        }

        $user->save();

        return redirect(route('users.edit',auth()->user()->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route('users.index'));
    }

    public function confirmaExclusao(User $user)
    {
        return view('users.excluir-user', compact('user'));
    }
}
