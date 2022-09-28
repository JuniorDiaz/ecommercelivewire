<?php

namespace App\Models\Categorias;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'desconto',
        'ativo'
    ];

    public function ativo():Attribute
    {
        return Attribute::make(
            //get: fn ($value) => ($value) == 1 ? 'Ativo' : 'Desativado',
            set: fn ($value) => ($value) === false ? 0 : 1
        );
    }
}
