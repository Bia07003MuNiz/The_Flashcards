<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
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
});
Route::get('/teste2', function () {
    $produto = Produto::find(2);


    dd($produto->possuiCategoria(1));
});

Route::resources([
    'produtos' => ProdutoController::class,
    'categorias' => CategoriaController::class,
    'users' => UserController::class, 
]);


Route::get('/produtos/{produto}/aviso', [ProdutoController::class, 'confirmaExclusao'])->name('produtos.aviso');
Route::get('/produtos/listar', [ProdutoController::class, 'listar'])->name('produtos.listar');

Route::get('/users/{user}/aviso', [UserController::class, 'confirmaExclusao'])->name('users.aviso');

Route::view('/quem-somos','quem-somos');
Route::view('/onde-estamos','onde-estamos');
Route::view('/contato','contato');
Route::view('/politica-de-privacidade','politica-de-privacidade');
Route::view('/termos-de-uso','termos-de-uso');
Route::view('/duvidas-frequentes','duvidas-frequentes');
Route::view('/login','login.login');