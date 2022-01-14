<?php

use Illuminate\Support\Facades\Route;

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
    return view('catalogo.index');
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
Route::get('carrinho', function () {
    return view('catalogo.cart');
})->name('catalogo.carrinho');
Route::get('checkout', function () {
    return view('catalogo.checkout');
})->name('catalogo.checkout');
Route::get('produto-detalhe', function () {
    return view('catalogo.product-detail');
})->name('catalogo.produto-detalhe');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});