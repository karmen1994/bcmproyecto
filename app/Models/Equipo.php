<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    public function aula(){
        return $this->belongsTo(Aula::class);
    }
    public function alumno(){
        return $this->hasMany(Alumno::class);
    }
    public function incidencia(){
        return $this->hasMany(Incidencia::class);
    }
    //relacion muchos a muchos 
    public function periferico(){
        return $this->belongsToMany(Periferico::class);
    }
}
