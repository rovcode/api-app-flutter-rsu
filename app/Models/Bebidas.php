<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebidas extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'nombre',
        'precio',
        'starts',
        'detalles',
    ];
    public function reseeva(){
        return $this.hasMany(Reserva::class);
    }

}
