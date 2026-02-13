<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $fillable = [
        'marca',
        'modelo',
        'anio',
        'precio'
    ];
}
