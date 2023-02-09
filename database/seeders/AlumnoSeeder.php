<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'nombre'=>'Alejandro Alberola Gopar',
            'grupo_id'=>'2',
            'equipo_id'=>'2'
        ]);
        Alumno::create([
            'nombre'=>'Donovan Martín Hernández',
            'grupo_id'=>'2',
            'equipo_id'=>'3'
        ]);
        Alumno::create([
            'nombre'=>'Marco Antonio López Expósito',
            'grupo_id'=>'2',
            'equipo_id'=>'4'
        ]);
        Alumno::create([
            'nombre'=>'Jose Raimundo Concepción Ruiz',
            'grupo_id'=>'2',
            'equipo_id'=>'5'
        ]);
        Alumno::create([
            'nombre'=>'Jorge San Juan Francisco',
            'grupo_id'=>'2',
            'equipo_id'=>'6'
        ]);
        Alumno::create([
            'nombre'=>'Sara González Martín',
            'grupo_id'=>'2',
            'equipo_id'=>'10'
        ]);
        Alumno::create([
            'nombre'=>'Carmen Nieves Hernández González',
            'grupo_id'=>'2',
            'equipo_id'=>'11'
        ]);
        Alumno::create([
            'nombre'=>'Aram Hernández Rodríguez',
            'grupo_id'=>'2',
            'equipo_id'=>'12'
        ]);
        Alumno::create([
            'nombre'=>'Diego Rodríguez Jacinto',
            'grupo_id'=>'2',
            'equipo_id'=>'13'
        ]);
        Alumno::create([
            'nombre'=>'Diego Brito Sánchez',
            'grupo_id'=>'2',
            'equipo_id'=>'14'
        ]);
        Alumno::create([
            'nombre'=>'Brian Álvarez Bermúdez',
            'grupo_id'=>'2',
            'equipo_id'=>'15'
        ]);
    }
}
