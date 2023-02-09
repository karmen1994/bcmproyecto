<?php

namespace Database\Seeders;

use App\Models\Equipo;
use App\Models\Periferico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perifericos=Periferico::all();
        for ($i=201; $i <=215 ; $i++) { 
            $equipo =Equipo::create([
                'averiado'=>'',
                'numero'=>$i,
                'aula_id'=>'1'
            ]);
            $equipo->save();
            foreach ($perifericos as $periferico){
                $equipo->periferico()->attach([$periferico->id]);
            }
        }
    }
}
