<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llama al UserSeeder
        $this->call(UserSeeder::class);

        // Si deseas conservar el ejemplo actual, puedes descomentar esta parte:
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
