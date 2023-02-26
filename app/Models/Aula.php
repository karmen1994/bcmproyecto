<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    protected $fillable =['nombre'];
    //relacion uno a muchos a la inversa

    public function equipo(){
        return $this->hasMany(Equipo::class);
    }
    public function grupo(){
        return $this->hasMany(Grupo::class);
    }
}
