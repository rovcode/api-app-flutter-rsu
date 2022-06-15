<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'nombre',
        'numerotipo)',
    ];
    public function users(){
        return $this.hasMany(User::class);
    }

}
