<?php

namespace App\Http\Controllers;

use App\Auxiliares\CarrinhoAux;
use App\Models\Imagem;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.lista-produtos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.cria-produto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->codigo = $request->codigo;
        $produto->informacoes = $request->informacoes;

        $produto->save();

        $produto->categorias()->attach($request->categoria);

        if($request->file()) {
            foreach ($request->file('arquivo') as $key => $arquivo) {
                //dd($request->file('arquivo'), $arquivo);
                $fileName = time().'_'.$arquivo->getClientOriginalName();
                $filePath = $arquivo->storeAs('produtos', $fileName, 'assets');

                $imagem = new Imagem();
                $imagem->produto_id = $produto->id;
                $imagem->url = 'http://127.0.0.1:8000/assets/images/'.$filePath;
                $imagem->save();
                # code...
            }
        }

        return redirect(route('produtos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        //dd($produto);
        return view('produtos.exibe-produto', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edita-produto', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->codigo = $request->codigo;
        $produto->informacoes = $request->informacoes;

        $produto->save();

        $produto->categorias()->detach();
        $produto->categorias()->attach($request->categoria);

        return redirect(route('produtos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->categorias()->detach();
        $produto->delete();

        return redirect(route('produtos.index'));
    }

    public function confirmaExclusao(Produto $produto)
    {
        return view('produtos.excluir-produto', compact('produto'));
    }

    public function Listar()
    {
        $produtos = Produto::all();

        return view('produtos.listar-produtos-clientes', compact('produtos'));
    }

    public function AddCarrinho(Produto $produto)
    {
        $carrinhoAux = new CarrinhoAux();
        
        $carrinhoAux->AddItemCarrinho($produto, 1);

        return redirect(route('carrinho'));
    }
}
