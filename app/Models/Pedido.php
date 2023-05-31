<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    // Modelo Pedido
public function bebidas()
{
    return $this->belongsToMany(Bebida::class)->withPivot('racion');
}

public function platos()
{
    return $this->belongsToMany(Plato::class)->withPivot('racion');
}

}

