<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //completer kes donnees qui vont s'enregistrer dans la BDD
        //php artisan db:seed

        User::factory()->create([
            'name' => 'japrote',
            'email' => 'ja@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678')
        ]);
    }
}
