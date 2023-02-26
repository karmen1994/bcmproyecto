<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::create([
            'npda'=>'8',
            'name'=>'Jorge Hernández Cabrera',
            'email'=>'jorge@gmail.com',
            'password'=>bcrypt('1234'),
            'remember_token' => Str::random(10)
        ])->assignRole('Profesor');

        User::create([
            'npda'=>'0',
            'name'=>'Administrador',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('1234'),
            'remember_token' => Str::random(10)
        ])->assignRole('Admin');;
    }
}
