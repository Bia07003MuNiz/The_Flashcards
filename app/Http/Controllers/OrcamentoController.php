<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use App\Models\User;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function PedidosPeriodo(Request $request)
    {
        $resultados=Orcamento::WHERE('id','>',0);
        if ($request->has('dtinicial')){
            $resultados->WHERE('created_at','>=',$request->dtinicial);
        }
        if ($request->has('dtfinal')){
            $resultados->WHERE('created_at','<=',$request->dtfinal);
        }
        if ($request->has('status')){
            $resultados->WHERE('status','=',$request->status);
        }

        $resultados=$resultados->get();

        return view('area-restrita/relatorios/pedidos-periodo', compact('resultados'));
    }
    




}
