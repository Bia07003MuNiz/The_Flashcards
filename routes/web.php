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


Route::view('/teste','tela-teste');


