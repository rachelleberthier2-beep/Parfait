<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserEditing extends Model
{
    // Spécifie explicitement la table utilisée
    protected $table = 'users';

    // Champs autorisés à être remplis (comme dans User)
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',   // Ajout du champ role ici
        // ajoute d'autres champs si nécessaire
    ];

    // Si tu veux gérer le hash du password ici, pense à le faire dans un mutator
}
