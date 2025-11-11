<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Affiche la page "Contact"
     */
    public function index()
    {
        // Affiche la vue du formulaire de contact
        return view('contact');
    }

    /**
     * Traite le formulaire de contact (si tu veux gérer l'envoi plus tard)
     */
    public function send(Request $request)
    {
        // Validation des champs du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Pour l’instant, on ne fait qu’un retour simple (tu pourras y ajouter PHPMailer ou Mail
    }

}
