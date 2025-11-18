<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index(Request $request)
    {
        // Liste : le slug => le nom affiché
        $categories = [
            'crea-visuel' => 'Créa visuel',
            'projet-design' => 'Projet design',
            'montage-video' => 'Montage vidéo',
            'campagne-medias' => 'Campagne médias',
            'impression' => 'Impression',
            'packaging' => 'Packaging',

        ];

        $selectedCategory = $request->query('category');

        // Aucun filtre → tous les fichiers
        if (!$selectedCategory) {
            $files = $this->getAllFiles(array_keys($categories));
        } 
        // Filtre valide → fichiers du dossier
        elseif (array_key_exists($selectedCategory, $categories)) {
            $files = $this->getFilesInFolder($selectedCategory);
        } 
        // Filtre invalide → aucun résultat
        else {
            $files = [];
        }

        /**
         * 🔥 PARTIE AJAX
         * Si la requête vient d’un fetch() ou $.ajax(),
         * on renvoie seulement la grille !
         */
        if ($request->ajax()) {
            return view('partials.realisations-grid', [
                'files' => $files
            ]);
        }

        // Chargement normal de la page
        return view('realisations', [
            'categories' => $categories,
            'category' => $selectedCategory,
            'files' => $files,
        ]);
    }

    // Récupère tous les fichiers des catégories
    private function getAllFiles($categorySlugs)
    {
        $all = [];
        foreach ($categorySlugs as $slug) {
            $all = array_merge($all, $this->getFilesInFolder($slug));
        }
        return $all;
    }

    // Récupère les fichiers d'un seul dossier
    private function getFilesInFolder($folder)
    {
        $path = public_path("realisation/$folder");

        if (!File::exists($path)) {
            return [];
        }

        $files = File::files($path);

        return array_map(function ($file) use ($folder) {

            $ext = strtolower($file->getExtension());

            return [
                'url' => asset("realisation/$folder/" . $file->getFilename()),
                'type' => $this->detectType($ext),
                'name' => $file->getFilename(),
                'folder' => $folder
            ];

        }, $files);
    }

    // Détecter type : image / video / pdf
    private function detectType($ext)
    {
        return match ($ext) {
            'jpg', 'jpeg', 'png' => 'image',
            'mp4', 'mov' => 'video',
            'pdf' => 'pdf',
            default => 'other',
        };
    }
}
