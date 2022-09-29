<?php

namespace App\Http\Livewire\Admin\Clientes;

use Livewire\Component;

class ClientesComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.clientes.clientes-component')->extends('layouts.admin')->section('content');
    }
}
