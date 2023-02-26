<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(AulaSeeder::class);
        //$this->call(EquipoPerifericoSeeder::class);
        $this->call(PerifericoSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(IncidenciaSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        
    
    }
}
