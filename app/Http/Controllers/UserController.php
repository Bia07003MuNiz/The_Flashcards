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
        $user = new User();
        $user->nome = $request->nome;
        $user->cpf = $request->cpf;
        $user->Celular = $request->Celular;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->tipo = $request->tipo;

        $user->cep = $request->cep;
        $user-> uf = $request->uf;
        $user->Cidade = $request->Cidade;
        $user->num = $request->num;
        $user->Bairro = $request->Bairro;
        $user->rua = $request->rua;
        $user->compl= $request->compl;


        $user->save();

        return redirect(route('cadastre-se'));




        
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
        $user->email = $request->email;
        $user->password = $request->password;
        $user->tipo = $request->tipo;
           
    /**
     * colocar no banco de dados 
     * 
     *   $user->cep = $request->cep;
     * $user->uf = $request->uf;
    *  $user->Cidade = $request->Cidade;
    * $user->num = $request->num;
    * $user->Bairro = $request->Bairro;
    * user->rua = $request->rua;
    * $user->compl= $request->compl;
 */

        $user->save();

        return redirect(route('users.index'));
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
