<?php

use App\Auxiliares\CarrinhoAux;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\LvCarrinho;
use App\Models\Produto;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resources([
    'produtos' => ProdutoController::class,
    'users' => UserController::class,
]);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/logar', [loginController::class, 'logar'])->name('logar');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [loginController::class, 'logout'])->name('logout');

    Route::resources([
        'categorias' => CategoriaController::class,
    ]);

    Route::get('/users/{user}/aviso', [UserController::class, 'confirmaExclusao'])->name('users.aviso');
    Route::get('/produtos/{produto}/aviso', [ProdutoController::class, 'confirmaExclusao'])->name('produtos.aviso');
});

Route::post('/produtos/pesquisar', [produtoController::class, 'pesquisar'])->name('produtos.pesquisar');
Route::get('/produtos/listar', [ProdutoController::class, 'listar'])->name('produtos.listar');
Route::get('/add-produto/{produto}', [ProdutoController::class, 'AddCarrinho'])->name('produtos.adicionar');
Route::get('/produtos/{categoria}/listar', [ProdutoController::class, 'produtoCategoriaIndex'])->name('produtos.categoria.listar');

Route::get('/report', function () {
    $produtos = Produto::all();

    return view('report', ['produtos' => $produtos]);
})->name('produtos-cadastros');

//Outros
Route::view('/historico','historico')->name('historico');
Route::view('/logado','logado')->name('logado');
Route::view('/contato','contato')->name('contato');

Route::view('/card1','card1')->name('card1');
Route::view('/card2','card2')->name('card2');
Route::view('/card3','card3')->name('card3');
Route::post('/salvacontato', [App\Http\Controllers\ContatoController::class, 'store'])->name('salvacontato');
Route::view('/politica-de-privacidade','politica-de-privacidade')->name('politicas');
Route::view('/relatorio','relatorio')->name('relatorio');
Route::view('/duvidas-frequentes','duvidas-frequentes')->name('duvidas');
Route::view('/esqueci-a-senha','esqueci-a-senha')->name('esqueci-senha');
Route::get('/carrinho', LvCarrinho::class)->name('carrinho');
Route::view('/cadastre-se','cadastre-se')->name('cadastre-se');
Route::post('/forgot-password', [App\Http\Controllers\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('forgot-password');
Route::get('/reset-password/{token}', [App\Http\Controllers\Auth\AuthResetPasswordController::class, 'showResetForm'])->name('password.reset');

//Área restrita (Vendedor e Cliente)
Route::get('/logado', [ProdutoController::class, 'obterUltimoId']);

Route::get('/teste', function () {
    $carrinhoAux = new CarrinhoAux();
    $carrinho = $carrinhoAux->PegaCarrinho();
    dd($carrinho->Itens[0]->Produto);
})->name('teste');

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/criacard', [ProdutoController::class, 'adminIndex'])->name('criacard');
    Route::get('/produtos-cadastrados', function () {
        $produtos = Produto::all();

        return view('area-restrita.relatorios.produtos-cadastrados', ['produtos' => $produtos]);
    })->name('produtos-cadastros');
});
//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// -----------------------------novas rotas-------------------------------------
Route::middleware(['auth'])->group(function () {
    Route::view('/pedidos-periodo-cliente','area-restrita/relatorios/pedidos-periodo-cliente')->name('pedidos-periodo-cliente');
    Route::post('/pedidos-periodo-cliente', [OrcamentoController::class, 'PedidosPeriodoCliente'])->name('resultados-periodo-cliente');

    Route::prefix('admin')->middleware(['admin'])->group(function () {
        Route::view('/contatos-periodo','area-restrita/relatorios/contatos-periodo')->name('contatos-periodo');
        Route::post('/contatos-periodo', [ContatoController::class, 'ContatoPeriodo'])->name('resultados-contatos-periodo');
        Route::view('/pedidos-periodo','area-restrita/relatorios/pedidos-periodo')->name('pedidos-periodo');
        Route::post('/resultados-periodo', [OrcamentoController::class, 'PedidosPeriodo'])->name('resultados-periodo');
        Route::view('/area-restrita','area-restrita/area-restrita')->name('boas-vindas'); //Exclusivo vendedor
        Route::view('/relatorios','area-restrita/relatorios')->name('relatorios'); //Exclusivo vendedor

    });

    Route::get('/orcamento/{id}/excluir',[OrcamentoController::class, 'avisoExcluir'])->name('aviso-exclui-orcamento');
    Route::delete('/orcamento/{orcamento}/excluir',[OrcamentoController::class, 'excluirOrcamento'])->name('excluir-orcamento');

    Route::get('/orcamento/{id}/editar',[OrcamentoController::class, 'viewEditar'])->name('view-editar-orcamento');
    Route::put('/orcamento/{orcamento}/editar',[OrcamentoController::class, 'editarOrcamento'])->name('editar-orcamento');
});
