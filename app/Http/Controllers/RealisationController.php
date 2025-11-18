<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

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

        // Convertir en Collection pour paginate()
        $collection = collect($files);

        // Pagination 6 par page
        $perPage = 6;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $paginatedFiles = new LengthAwarePaginator(
            $currentPageItems,
            $collection->count(),
            $perPage,
            $currentPage,
            ['path' => url()->current()]
        );

        // Si c'est AJAX -> on envoie seulement le morceau HTML
        if ($request->ajax()) {
            return view('partials.realisations-grid', [
                'files' => $paginatedFiles
            ]);
        }

        // Affichage classique
        return view('realisations', [
            'categories' => $categories,
            'category' => $selectedCategory,
            'files' => $paginatedFiles,
        ]);
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
