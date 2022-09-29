<?php

namespace App\Http\Livewire\Admin\SubCategorias;

use App\Models\Categorias\Categoria;
use App\Models\Categorias\SubCategoria;
use Livewire\Component;
use Livewire\WithPagination;

class SubCategoriaComponent extends Component
{


    use WithPagination;

    public $nome, $ativo = true, $categorias, $subCategoria_id, $categoria_id;

    public function mount()
    {
        $this->categorias = Categoria::orderBy('nome', 'ASC')->get();
    }

    public function salvarSubCategoria()
    {
        $data = $this->validate();
        SubCategoria::updateOrCreate(['id' => $this->subCategoria_id], $data);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        //subcategorias
        $subCategorias = SubCategoria::orderBy('nome', 'ASC')->paginate();
        return view('livewire.admin.sub-categorias.sub-categoria-component', compact('subCategorias'))->extends('layouts.admin')->section('content');
    }

    public function resetInput()
    {
        $this->nome = null;
        $this->ativo = true;
        $this->subCategoria_id = null;
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

    protected function rules()
    {
        if ($this->subCategoria_id) {
            $rules = [
                'nome' => "required|string|min:5",
                'ativo' => 'boolean'
            ];
        } else {
            $rules = [
                'nome' => "required|string|min:2|unique:sub_categorias,nome",
                'ativo' => 'boolean',
                'categoria_id' => 'numeric'
            ];
        }

        return $rules;
    }
}
