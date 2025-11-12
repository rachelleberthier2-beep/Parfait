<?php

namespace App\Http\Controllers;
use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
   public function index(Request $request)
{
    // Liste fixe des catégories
    $categories = ['Créa visuel', 'Projet design', 'Montage vidéo', 'Campagne médias'];
    
    
    
    // $category = $request->query('category'); si category existe
    if($request->has('category')){
        $category = $request->query('category');
        $realisations = Realisation::when($category, function ($query, $category) {
            return $query->where('category', $category);
        })->latest()->get();
    } else {
        $category = null;
        $realisations = Realisation::latest()->get()->pagi;
    }

    return view('realisations', compact('realisations', 'categories', 'category'));
}

}

