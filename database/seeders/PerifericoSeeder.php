<?php

namespace Database\Seeders;

use App\Models\Periferico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerifericoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Periferico::create([
            'nombre'=>'Pantalla 1',
            'cantidad'=>10,
            'ubicacion'=>'Armario aula 59'
        ]);
        Periferico::create([
            'nombre'=>'Pantalla 2',
            'cantidad'=>10,
            'ubicacion'=>'Armario aula 58'
        ]);
        Periferico::create([
            'nombre'=>'Teclado',
            'cantidad'=>10,
            'ubicacion'=>'Armario aula 59'
        ]);
        Periferico::create([
            'nombre'=>'Raton',
            'cantidad'=>10,
            'ubicacion'=>'Armario aula 59'
        ]);
        Periferico::create([
            'nombre'=>'Auriculares',
            'cantidad'=>10,
            'ubicacion'=>'Armario aula 59'
        ]);
        Periferico::create([
            'nombre'=>'Silla',
            'cantidad'=>10,
            'ubicacion'=>'Armario aula 59'
        ]);
    }
}
