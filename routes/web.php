<?php

use App\Livewire\Login;
use App\Livewire\Movimentacaos\MovimentacaoCreate;
use App\Livewire\Movimentacaos\MovimentacaoIndex;
use App\Livewire\Produtos\ProdutoCreate;
use App\Livewire\Produtos\ProdutoEdit;
use App\Livewire\Produtos\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/produto/create', ProdutoCreate::class)->middleware('auth')->name('produtos.create');
Route::get('/produto/edit/{id}', ProdutoEdit::class)->middleware('auth')->name('produtos.edit');
Route::get('/produtos', ProdutoIndex::class)->middleware('auth')->name('produtos.index');
Route::get('/login', Login::class)->name('login');
Route::get('movimentacao/create', MovimentacaoCreate::class)->name('movimentacao.create');
Route::get('movimentacao', MovimentacaoIndex::class)->name('movimentacao.index');


