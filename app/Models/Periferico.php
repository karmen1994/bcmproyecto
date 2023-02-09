<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periferico extends Model
{
    use HasFactory;
    public function equipo(){
        return $this->belongsToMany(Equipo::class);
    }
}
