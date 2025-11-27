<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class RealisationController extends Controller
{
    public function index(Request $request)
    {
        $categories = [
            'crea-visuel' => 'Créa visuel',
            'projet-design' => 'Projet design',
            'montage-video' => 'Montage vidéo',
            'campagne-medias' => 'Campagne médias',
            'impression' => 'Impression',
            'packaging' => 'Packaging',
        ];

        $selectedCategory = $request->query('category');

        // Fichiers selon catégorie
        if (!$selectedCategory) {
            $files = $this->getAllFiles(array_keys($categories));
        } elseif (array_key_exists($selectedCategory, $categories)) {
            $files = $this->getFilesInFolder($selectedCategory);
        } else {
            $files = [];
        }

        $collection = collect($files);

        // Pagination
        $perPage = 50;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $paginatedFiles = new LengthAwarePaginator(
            $currentPageItems,
            $collection->count(),
            $perPage,
            $currentPage,
            ['path' => url()->current()]
        );

        if ($request->ajax()) {
            return view('partials.realisations-grid', [
                'files' => $paginatedFiles
            ]);
        }

        return view('realisations', [
            'categories' => $categories,
            'category' => $selectedCategory,
            'files' => $paginatedFiles,
        ]);
    }

    public function create()
{
    $categories = [
        'crea-visuel'    => 'Créa visuel',
        'projet-design'  => 'Projet design',
        'montage-video'  => 'Montage vidéo',
        'campagne-medias'=> 'Campagne médias',
        'impression'     => 'Impression',
        'packaging'      => 'Packaging',
    ];

    // si ta vue est resources/views/realisations/create.blade.php
    return view('realisations.create', compact('categories'));
}


    /**
     * ===============================
     *   STORE : Upload des fichiers
     * ===============================
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'folder' => 'required|string',
            'file' => 'required|file',
        ]);

        $folder = $request->folder;

        // Chemin réel dans public/
        $path = public_path("realisation/" . $folder);

        // Si le dossier n'existe pas -> on le crée
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        // Récupération du fichier
        $file = $request->file('file');

        // Nouveau nom sécurisé
        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

        // Déplacement dans le bon dossier
        $file->move($path, $filename);

        return back()->with('success', 'Fichier uploadé avec succès !');
    }

    private function getAllFiles($categorySlugs)
    {
        $all = [];
        foreach ($categorySlugs as $slug) {
            $all = array_merge($all, $this->getFilesInFolder($slug));
        }
        return $all;
    }

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
