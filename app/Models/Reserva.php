<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = [
        'mesaid',
        'user_id',
        'estado',
        'detalles',
    ];
    public function mesas(){
        return $this.belongsToMany(Mesas::class);
    }
    public function users(){
        return $this.belongsToMany(User::class);
    }

}
