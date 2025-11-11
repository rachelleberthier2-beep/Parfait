<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Affiche la page "À propos"
     */
    public function index()
    {
        // Retourne la vue située dans resources/views/about.blade.php
        return view('about');
    }
}
