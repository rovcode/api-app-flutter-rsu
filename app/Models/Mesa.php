<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'num_sillas',
        'estado',
        'piso',
    ];
    public function reserva(){
        return $this.hasMany(Reserva::class);
    }  
}
