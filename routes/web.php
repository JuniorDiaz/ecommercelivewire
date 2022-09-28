<?php

use App\Http\Controllers\Admin\Categorias\CategoriaController;
use App\Http\Controllers\Admin\SubCategoria\SubCategoriaController;
use App\Http\Controllers\Webcontroller;
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

Route::get('/', [Webcontroller::class,'index']);
Route::get('/categorias', \App\Http\Livewire\Admin\Categorias\Categorias::class)->name('admin.categorias');
Route::get('/subcategorias', \App\Http\Livewire\Admin\SubCategoria\SubCategoriaComponent::class)->name('admin.subcategorias');
//Route::get('/categorias', [CategoriaController::class,'index'])->name('admin.categorias');
//Route::get('/subcategorias', [SubCategoriaController::class,'index'])->name('admin.subcategorias');

