<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('categoria', CategoriaController::class);
Route::resource('produto', ProdutoController::class);
