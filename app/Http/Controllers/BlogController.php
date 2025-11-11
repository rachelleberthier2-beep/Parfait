<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category'); // Catégorie sélectionnée
        $perPage = 4; // Nombre d'articles par page

        // Construction de la requête avec filtre catégorie
        $query = Post::when($category, function ($query, $category) {
            return $query->where('category', $category);
        });

        // Pagination des posts
        $posts = $query->latest()->paginate($perPage);

        // Toutes les catégories distinctes (filtre)
        $categories = Post::select('category')->distinct()->pluck('category')->filter()->values();

        if ($request->ajax()) {
            // Si requête AJAX, on renvoie uniquement la vue partielle des articles
            return view('partials.blog-posts', compact('posts'))->render();
        }

        return view('blog', compact('posts', 'categories', 'category'));
    }

    // Affichage d’un article unique
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('blog-show', compact('post'));
    }
}
