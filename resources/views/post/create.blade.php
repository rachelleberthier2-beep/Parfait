@extends('layouts.app')

@section('title', 'Créer un blog')

@section('content')

<div class="max-w-3xl mx-auto mt-10 bg-white p-8 shadow-lg rounded-lg">

    <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Ajouter un article</h1>

    {{-- Message succès --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-md border border-green-300">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        {{-- Titre --}}
        <div>
            <label for="title" class="block text-gray-700 font-semibold mb-2">Titre <span class="text-red-500">*</span></label>
            <input id="title" type="text" name="title" class="w-full border border-gray-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        {{-- Except --}}
        <div>
            <label for="except" class="block text-gray-700 font-semibold mb-2">Description</label>
            <input id="except" type="text" name="except" class="w-full border border-gray-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        {{-- Contenu --}}
        <div>
            <label for="content" class="block text-gray-700 font-semibold mb-2">Contenu <span class="text-red-500">*</span></label>
            <textarea id="content" name="content" rows="6" class="w-full border border-gray-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
        </div>

        {{-- Catégorie --}}
        <div>
            <label for="category" class="block text-gray-700 font-semibold mb-2">Catégorie <span class="text-red-500">*</span></label>
            <select id="category" name="category" class="w-full border border-gray-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="" disabled selected>-- Sélectionnez une catégorie --</option>
                <option value="Créa visuel">Créa visuel</option>
                <option value="Montage Vidéo">Montage Vidéo</option>
                <option value="Campagne média">Campagne média</option>
                <option value="Projet design">Projet design</option>
            </select>
        </div>

        {{-- Image --}}
        <div>
            <label for="file" class="block text-gray-700 font-semibold mb-2">Image (JPG, JPEG, PNG)</label>
            <input id="file" type="file" name="file" accept="image/jpg, image/jpeg, image/png" class="w-full border border-gray-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div>
            <button type="submit" class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition duration-300">
                Publier
            </button>
        </div>
    </form>

    {{-- Bouton déconnexion placé ici, juste avant la fin du container --}}
    <form method="POST" action="{{ route('logout') }}" class="mt-6">
        @csrf
        <button type="submit" class="w-full px-6 py-3 bg-red-600 text-white font-semibold rounded-md hover:bg-red-700 transition duration-300">
            Se déconnecter
        </button>
    </form>

</div>

@endsection
