<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User; // Asegúrate de importar el modelo User si existe.

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generar 10 usuarios
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => 'User' . $i,
                'lastName' => 'LastName' . $i,
                'email' => 'user' . $i . '@example.com',
                'phone' => '123456789' . $i,
                'password' => Hash::make('password123'), // Encripta la contraseña
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
