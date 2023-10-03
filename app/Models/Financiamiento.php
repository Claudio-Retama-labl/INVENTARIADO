<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Financiamiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'tipo',
        'descripcion',
        
    ];

    public function Articulo(): BelongsTo
    {
        return $this->belongsTo(Articulo::class);
    }
}
