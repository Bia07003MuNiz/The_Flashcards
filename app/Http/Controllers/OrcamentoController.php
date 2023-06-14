<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrcamentoController extends Controller
{
    public function PedidosPeriodo(Request $request)
    {
        $resultados=Orcamento::WHERE('id','>',0);
        if (isset($request->dtinicial)){
            $resultados->WHERE('created_at','>=',$request->dtinicial);
        }
        if (isset($request->dtfinal)){
            $resultados->WHERE('created_at','<=',$request->dtfinal);
        }
        if ($request->has('status')){
            $resultados->WHERE('status','=',$request->status);
        }

        $resultados=$resultados->get();

        return view('area-restrita/relatorios/pedidos-periodo', compact('resultados'));
    }

    public function PedidosPeriodoCliente(Request $request)
    {
       //dd($request);
        $resultados= Orcamento::WHERE('user_id','=',Auth::user()->id);
        if (isset($request->dtinicial)){
            $resultados->WHERE('created_at','>=',$request->dtinicial);
        }
        if (isset($request->dtfinal)){
            $resultados->WHERE('created_at','<=',$request->dtfinal);
        }
        if ($request->has('status')){
            $resultados->WHERE('status','=',$request->status);
        }

        $resultados=$resultados->get();

        return view('area-restrita/relatorios/pedidos-periodo-cliente', compact('resultados'));
    }

    public function avisoExcluir($id){
        $orcamento = Orcamento::find($id);
        return view('orcamentos.excluir-orcamento', compact('orcamento'));
    }

    public function excluirOrcamento(Orcamento $orcamento) {

        $orcamento->delete();

        return redirect(route('pedidos-periodo'));
    }

    public function viewEditar($id){
        $orcamento = Orcamento::find($id);
        return view('orcamentos.altera-status-orcamento', compact('orcamento'));
    }

    public function editarOrcamento(Orcamento $orcamento, Request $request) {
        //dd($request);

        if(isset($request->status)){
            $orcamento->status = $request->status;

            $orcamento->save();


        }

        return redirect(route('pedidos-periodo'));
    }
    




}
