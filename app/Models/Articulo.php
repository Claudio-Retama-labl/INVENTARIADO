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
        'numero_caja',
        'especificaciones',
        'personal_id',
        'categorias_id',
        'dependencias_id',
        'financiamiento_id',
        'estado_bien'
    ];

    public function Categoria(): HasMany
    {
        return $this->hasMany(Categoria::class);
    }

    public function Dependencia(): HasMany
    {
        return $this->hasMany(Dependencia::class);
    }

    public function Financiamiento(): HasMany
    {
        return $this->hasMany(Financiamiento::class);
    }

    public function Personal(): HasMany
    {
        return $this->hasMany(Personal::class);
    }
}
