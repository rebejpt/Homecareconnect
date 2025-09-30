<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
<<<<<<< HEAD
        //completer kes donnees qui vont s'enregistrer dans la BDD
        //php artisan db:seed

        User::factory()->create([
            'name' => 'japrote',
            'email' => 'ja@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678')
=======

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
        ]);
    }
}
