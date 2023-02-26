<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','turno','aula_id'];
    //relacion uno a muchos
    public function aula(){
        return $this->belongsTo(Aula::class);
    }
    public function alumno(){
        return $this->hasMany(Alumno::class);
    }
}
