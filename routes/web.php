<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\loginController;
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


Route::view('/quem-somos','quem-somos');
Route::view('/onde-estamos','onde-estamos');
Route::view('/contato','contato')->name('contato');
Route::view('/politica-de-privacidade','politica-de-privacidade');
Route::view('/termos-de-uso','termos-de-uso');
Route::view('/duvidas-frequentes','duvidas-frequentes');
Route::view('/cadastre-se','cadastre-se');
//Route::view('/login','login.login');