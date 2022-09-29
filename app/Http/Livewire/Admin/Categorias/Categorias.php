<?php

namespace App\Http\Livewire\Admin\Categorias;

use App\Models\Categorias\Categoria;
use Livewire\Component;
use Livewire\WithPagination;

class Categorias extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $categoria_id, $nome, $ativo = true, $search;
    protected $queryString = ['search'];

    public function salvarCategoria()
    {
        $data = $this->validate();
        Categoria::updateOrCreate(['id' => $this->categoria_id], $data);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        //Categorias
        $categorias = Categoria::when($this->search, function ($query, $term) {
            return $query->where('nome', 'like', '%' . $term . '%');
        })->orderBy('nome', 'ASC')->paginate();

        return view('livewire.admin.categorias.categorias',compact('categorias'))->extends('layouts.admin')->section('content');
    }

    public function editarCategoria(int $categoria_id)
    {
        $this->categoria_id = $categoria_id;
        $categoria = Categoria::findOrFail($categoria_id);
        $this->nome = $categoria->nome;
        $this->ativo = $categoria->ativo;
    }

    public function deletarCategoria(int $categoria_id)
    {
        $this->categoria_id = $categoria_id;
    }

    public function destroyCategoria()
    {
        Categoria::findOrFail($this->categoria_id)->delete();
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nome = null;
        $this->ativo = true;
        $this->categoria_id = null;
    }

    public function closeModal()
    {
        $this->resetErrorBag();
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

//    protected function rules()
//    {
//        return [
//            'nome' => "required|string|min:5|unique:categorias,nome,{$this->id}",
//            'ativo' => 'boolean'
//        ];
//    }

    protected function rules()
    {
        if ($this->categoria_id) {
            $rules = [
                'nome' => "required|string|min:5",
                'ativo' => 'boolean'
            ];
        } else {
            $rules = [
                'nome' => "required|string|min:5|unique:categorias,nome",
                'ativo' => 'boolean'
            ];
        }

        return $rules;
    }
}
