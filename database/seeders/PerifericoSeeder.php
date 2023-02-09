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
            'nombre'=>'Pantalla 1'
        ]);
        Periferico::create([
            'nombre'=>'Pantalla 2'
        ]);
        Periferico::create([
            'nombre'=>'Teclado'
        ]);
        Periferico::create([
            'nombre'=>'Raton'
        ]);
        Periferico::create([
            'nombre'=>'Auriculares'
        ]);
        Periferico::create([
            'nombre'=>'Silla'
        ]);
    }
}
