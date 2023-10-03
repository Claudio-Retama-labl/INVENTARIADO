<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Articulo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'serial',
        'color',
        'modelo',
        'especificaciones',
        'categorias_id',
        'dependencias_id',
        'financiamiento_id',
        'estado_bien'
    ];

    public function Categoria(): HasMany
    {
        return $this->hasMany(Categoria::class);
    }

    public function Dependecia(): HasMany
    {
        return $this->hasMany(Dependecia::class);
    }

    public function Financiamiento(): HasMany
    {
        return $this->hasMany(Financiamiento::class);
    }
}
