<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Solicitud extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_solicitud',
        'estado',
    ];


    public function Personal(): HasMany
    {
        return $this->hasMany(Personal::class);
    }

    public function Articulo(): HasMany
    {
        return $this->hasMany(Articulo::class);
    }

    public function Dependencia(): HasMany
    {
        return $this->hasMany(Dependencia::class);
    }

}
