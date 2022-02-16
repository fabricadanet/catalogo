<?php

use Illuminate\Support\Facades\Route;
use App\models\Produto;
use \App\Http\Controllers\{
    CategoriaController,
    ProdutoController,
    ProfileController,
    UserController,
    HomeController,
    VendaController,
    ClienteController,
    ContatoController,
    CartController

};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   $produtos= Produto::all();
    return view('catalogo.index', compact('produtos'));
})->name('catalogo.index');

Route::get('sobre', function () {
    return view('catalogo.sobre');
})->name('catalogo.sobre');
Route::get('produtos', function () {
    return view('catalogo.products');
})->name('catalogo.produtos');
Route::get('promocao', function () {
    return view('catalogo.promotion');
})->name('catalogo.promocao');
Route::get('contato', function () {
    return view('catalogo.contato');
})->name('catalogo.contato');
Route::get('categorias', function () {
    return view('catalogo.category');
})->name('catalogo.categorias');
Route::get('carrinho', [CartController::class,'viewCart'])->name('catalogo.carrinho');
Route::post('carrinho/update', [CartController::class,'update'])->name('carrinho.update');
Route::get('checkout', function () {
    return view('catalogo.checkout');
})->name('catalogo.checkout');
Route::get('produto-detalhe', function () {
    return view('catalogo.product-detail');
})->name('catalogo.produto-detalhe');
Route::post('carrinho',[CartController::class, 'addToCart'])->name('carrinho.add');
Route::get('carrinho/remove/{id}', [CartController::class, 'remove'])->name('carrinho.remove');
Route::post('carrinho/finalizar', [CartController::class, 'finalizarCompra'])->name('carrinho.finalizar');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('produtos', ProdutoController::class);
    Route::get('vendas/abertas', [VendaController::class, 'abertas'])->name('vendas.open');
    Route::get('vendas/fechadas', [VendaController::class, 'fechadas'])->name('vendas.closed');
    Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('contatos', [ContatoController::class, 'index'])->name('contatos.index');
    Route::resource('categorias', CategoriaController::class);
});
