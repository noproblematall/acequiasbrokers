<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Jefferson',
            'last_name' => 'Aragon',
            'email' => 'aragon.jefferson89@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'first_name' => 'Oscar',
            'last_name' => 'Papi',
            'email' => 'oscar.papi@moreclix.co',
            'password' => Hash::make('password'),
        ]);
    }
}
