<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'nombre'=>'1º DAW',
            'turno'=>'Tarde',
            'aula_id'=>'2'
        ]);
        Grupo::create([
            'nombre'=>'2º DAW',
            'turno'=>'Tarde',
            'aula_id'=>'1'
        ]);
        Grupo::create([
            'nombre'=>'1º ASIR',
            'turno'=>'Tarde',
            'aula_id'=>'3'
        ]);
    }
}
