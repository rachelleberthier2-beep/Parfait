@extends('layouts.app')

@section('title', 'Créer une blog')

@section('content')

<div class="max-w-3xl mx-auto mt-10 bg-white p-8 shadow-lg rounded-lg">

    <h1 class="text-2xl font-bold mb-6">Ajouter un article</h1>

    {{-- Message succès --}}
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Titre --}}
        <div class="mb-4">
            <label class="font-semibold block mb-1">Titre</label>
            <input type="text" name="title" class="w-full border p-2 rounded" required>
        </div>

        {{-- Contenu --}}
        <div class="mb-4">
            <label class="font-semibold block mb-1">Contenu</label>
            <textarea name="content" class="w-full border p-2 rounded" rows="6" required></textarea>
        </div>

        {{-- Catégorie --}}
        <div class="mb-4">
            <label class="font-semibold block mb-1">Catégorie</label>
            <select name="category" class="w-full border p-2 rounded" required>
                <option value="Créa visuel">Créa visuel</option>
                <option value="Montage Vidéo">Montage Vidéo</option>
                <option value="Campagne média">Campagne média</option>
                <option value="Projet design">Projet design</option>
            </select>
        </div>

        {{-- Image --}}
        <div class="mb-4">
            <label class="font-semibold block mb-1">Image (JPG uniquement)</label>
            <input type="file" name="file" accept="blog/jpg, blog/jpeg, blog/png" 
       class="w-full border p-2 rounded" required>

        </div>

        <button class="px-6 py-2 bg-blue-600 text-white rounded">
            Publier
        </button>

    </form>

</div>

@endsection
