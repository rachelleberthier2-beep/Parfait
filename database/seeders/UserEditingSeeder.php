<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserEditing;
use Illuminate\Support\Facades\Hash;

class UserEditingSeeder extends Seeder
{
    public function run(): void
    {
        // Admin Parfait
        UserEditing::firstOrCreate(
            ['email' => 'tozoparfait4@gmail.com'], // critère pour éviter doublon
            [
                'name' => 'Parfait',
                'password' => Hash::make('tozoparfait4@gmail.com!'),
                'role' => 'admin',
            ]
        );

        // Ton propre admin
        UserEditing::firstOrCreate(
            ['email' => 'rachelleberthier2@gmail.com'], 
            [
                'name' => 'Rodrigue',
                'password' => Hash::make('Lipton6640'),
                'role' => 'admin',
            ]
        );
    }
}
