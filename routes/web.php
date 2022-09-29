<?php
use App\Http\Controllers\Webcontroller;
use App\Http\Livewire\Admin\Categorias\Categorias;
use App\Http\Livewire\Admin\Clientes\ClientesComponent;
use App\Http\Livewire\Admin\SubCategorias\SubCategoriaComponent;
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
Route::get('/categorias', Categorias::class)->name('admin.categorias');
Route::get('/subcategorias', SubCategoriaComponent::class)->name('admin.subcategorias');
Route::get('/clientes', ClientesComponent::class)->name('admin.clientes');

