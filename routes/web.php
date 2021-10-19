<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Produtos;



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
    return view('welcome');
});

Route::prefix('/categoria')->group( function(){

    Route::get('/', [Categorias::class, 'index'])->name('categoria.index');

    Route::get('/create', [Categorias::class, 'create'])->name('categoria.create');

    Route::post('/store', [Categorias::class, 'store'])->name('categoria.store');

    Route::get('/show/{id}', [Categorias::class, 'show'])->name('categoria.show');

    Route::get('/edit/{id}', [Categorias::class, 'edit'])->name('categoria.edit');

});

Route::prefix('/produto')->group( function(){

    Route::get('/', [Produtos::class, 'index'])->name('produto.index');

    Route::get('/create', [Produtos::class, 'create'])->name('produto.create');

    Route::post('/store', [Produtos::class, 'store'])->name('produto.store');

    Route::get('/show/{id}', [Produtos::class, 'show'])->name('produto.show');

    Route::get('/edit/{id}', [Produtos::class, 'edit'])->name('produto.edit');

});
