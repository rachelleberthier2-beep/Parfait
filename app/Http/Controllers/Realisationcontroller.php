<?php

namespace App\Http\Controllers;
use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
   public function index(Request $request)
{
    $category = $request->query('category');

    // Liste fixe des catégories
    $categories = ['Créa visuel', 'Projet design', 'Montage vidéo', 'Campagne médias'];

    $realisations = Realisation::when($category, function ($query, $category) {
        return $query->where('category', $category);
    })->latest()->get();

    return view('realisations', compact('realisations', 'categories', 'category'));
}

}

