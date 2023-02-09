<?php

namespace Database\Seeders;

use App\Models\Aula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aula::create([
            'nombre'=>'D58',
        ]);
        Aula::create([
            'nombre'=>'D59',
        ]);
        Aula::create([
            'nombre'=>'D52',
        ]);
    }
}
