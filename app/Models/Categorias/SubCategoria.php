<?php

namespace App\Models\Categorias;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    protected $fillable=[
        'nome',
        'ativo',
        'desconto',
        'categoria_id'
    ];

    public function categoria()
    {
        return $this->hasOne(Categoria::class,'id','categoria_id');
    }

    public function ativo():Attribute
    {
        return Attribute::make(
        //get: fn ($value) => ($value) == 1 ? 'Ativo' : 'Desativado',
            set: fn ($value) => ($value) === false ? 0 : 1
        );
    }
}
