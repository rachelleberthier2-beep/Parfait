<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function __construct()
    {
        // Protéger uniquement les méthodes create et store
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function index(Request $request)
    {
        // Liste fixe des catégories
        $categories = ['Créa visuel', 'Projet design', 'Montage vidéo', 'Campagne médias'];

        if ($request->has('category')) {
            $category = $request->query('category');
            $realisations = Realisation::when($category, function ($query, $category) {
                return $query->where('category', $category);
            })->latest()->get();
        } else {
            $category = null;
            $realisations = Realisation::paginate(6);
        }

        return view('realisations', compact('realisations', 'categories', 'category'));
    }

    public function create()
    {
        return view('realisations.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'file_type' => 'required|string',
            'file' => 'required|file|mimes:mp4,avi,mpeg,mov,jpeg,jpg,png,pdf|max:1024000',


        ]);

        // Stockage du fichier
        if ($request->file_type === 'video') {
        $path = $request->file('file')->store('videos', 'public');
    } elseif ($request->file_type === 'image') {
        $path = $request->file('file')->store('images', 'public');
    } else {
        $path = $request->file('file')->store('docs', 'public');
    }

        // Enregistrement dans la base
        Realisation::create([
            'title' => $request->title,
            'category' => $request->category,
            'file_type' => $request->file_type,
            'file_path' => $path,
        ]);

        return redirect()->back()->with('success', 'Réalisation ajoutée avec succès !');
    }
}
