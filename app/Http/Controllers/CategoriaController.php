<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias.lista-categorias', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.cria-categoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $categoria = new Categoria();

    $categoria->nome = $request->nome;
    $categoria->destaque = $request->destaque;

    $categoria->save();

    session()->flash('success', 'Categoria criada com sucesso!');

        return redirect(route('criacard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('categorias.exibe-categoria', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edita-categoria', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {

        $categoria->nome = $request->nome;

        $categoria->destaque = $request->destaque;

        $categoria->save();

        return redirect(route('categorias.index'));
    }

    /**
     * Remove the specified resource from storage.
     */

    // No modelo Categoria.php
public function produtos()
{
    return $this->hasMany(Produto::class);
}

}
