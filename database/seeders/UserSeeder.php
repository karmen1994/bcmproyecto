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
            'password'=>'1234',
            'remember_token' => Str::random(10)
        ]);
    }
}
