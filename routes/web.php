<?php

use App\Auxiliares\CarrinhoAux;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\LvCarrinho;
use App\Models\Produto;
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
    'categorias' => CategoriaController::class,
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
    
    Route::get('/users/{user}/aviso', [UserController::class, 'confirmaExclusao'])->name('users.aviso');
    Route::get('/produtos/{produto}/aviso', [ProdutoController::class, 'confirmaExclusao'])->name('produtos.aviso');
});


Route::get('/produtos/listar', [ProdutoController::class, 'listar'])->name('produtos.listar');
Route::get('/add-produto/{produto}', [ProdutoController::class, 'AddCarrinho'])->name('produtos.adicionar');


//Outros
Route::view('/quem-somos','quem-somos')->name('quem-somos');
Route::view('/onde-estamos','onde-estamos')->name('onde-estamos');
Route::view('/contato','contato')->name('contato');
Route::view('/politica-de-privacidade','politica-de-privacidade')->name('politicas');
Route::view('/termos-de-uso','termos-de-uso')->name('termos');
Route::view('/duvidas-frequentes','duvidas-frequentes')->name('duvidas');
Route::view('/esqueci-a-senha','esqueci-a-senha')->name('esqueci-senha');
Route::get('/carrinho', LvCarrinho::class)->name('carrinho');
Route::view('/cadastre-se','cadastre-se')->name('cadastre-se');
Route::post('/forgot-password', [App\Http\Controllers\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('forgot-password');
Route::get('/reset-password/{token}', [App\Http\Controllers\Auth\AuthResetPasswordController::class, 'showResetForm'])->name('password.reset');



//Área restrita do vendedor
Route::view('/area-restrita','area-restrita-vendedor/area-restrita')->name('boas-vindas');
Route::view('/meus-dados','area-restrita-vendedor/meus-dados')->name('meus-dados');
Route::view('/alterar-senha','area-restrita-vendedor/alterar-senha')->name('alterar-senha');
Route::view('/cadastrar-nova-categoria','area-restrita-vendedor/cadastrar-nova-categoria')->name('cadastrar-nova-categoria');
Route::view('/cadastrar-novo-produto','area-restrita-vendedor/cadastrar-novo-produto')->name('cadastrar-novo-produto');

//Área restrita do cliente
Route::view('/meus-dados-cadastrais','area-restrita-cliente/meus-dados-cadastrais')->name('meus-dados-cadastrais');
Route::view('/mudar-senha','area-restrita-cliente/mudar-senha')->name('mudar-senha');

Route::get('/teste', function () {
    $carrinhoAux = new CarrinhoAux();
    $carrinho = $carrinhoAux->PegaCarrinho();
    dd($carrinho->Itens[0]->Produto);
})->name('teste');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
