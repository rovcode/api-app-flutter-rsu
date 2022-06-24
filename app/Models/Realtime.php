<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realtime extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'fecha',
        'aforoonline',
        'idlocal',
    ];
    public function reseeva(){
        return $this.hasMany(Local::class);
    }

}
