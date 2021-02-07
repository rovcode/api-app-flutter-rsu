<?php

namespace App\Models\delifazil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'ruc',
        'encargado',
        'horario',
        'phone',
        'direccion',
        'log',
        'lat',
        'distrito',
        'ciudad'

    ];
}
