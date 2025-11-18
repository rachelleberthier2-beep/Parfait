<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserEditing;
use Illuminate\Support\Facades\Hash;

class UserEditingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vérifie si un admin existe déjà
        if (!UserEditing::where('role', 'admin')->exists()) {

            UserEditing::create([
                'name' => 'Admin Principal',
                'email' => 'tozoparfait4@gmail.com',
                'password' => Hash::make('tozoparfait4@gmail.com!'), // Change si tu veux
                'role' => 'admin',
            ]);

            echo "Admin créé avec succès !\n";
        } else {
            echo "Un admin existe déjà, aucun ajout.\n";
        }
    }
}
