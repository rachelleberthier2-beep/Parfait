@extends('layouts.app')

@section('title', 'Créate')

@section('content')
<!-- Conteneur avec centrage horizontal et marge haute -->
<div class="min-h-screen flex justify-center pt-16 bg-gray-100 px-4">
  <!-- Div contenant le formulaire et la couleur de fond -->
  <div class="max-w-xl w-full bg-[#17e5f3] rounded-2xl shadow-xl p-12 ring-1 ring-blue-400">
    <form action="{{ route('realisations.store') }}" method="POST" enctype="multipart/form-data" novalidate>
      @csrf

      <h2 class="text-4xl font-extrabold mb-10 text-center text-gray-900 tracking-tight">Ajouter une Réalisation</h2>

      <div class="mb-8">
        <label for="title" class="block text-gray-900 font-semibold mb-3 text-lg">Titre</label>
        <input
          type="text"
          name="title"
          id="title"
          placeholder="Entrez le titre"
          required
          class="w-full px-5 py-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-4 focus:ring-blue-500 placeholder-gray-400 text-lg transition duration-300"
        />
      </div>

      <div class="mb-8">
        <label for="category" class="block text-gray-900 font-semibold mb-3 text-lg">Catégorie</label>
        <select
          name="category"
          id="category"
          required
          class="w-full px-5 py-4 rounded-xl border border-gray-300 bg-white focus:outline-none focus:ring-4 focus:ring-blue-500 text-lg transition duration-300"
        >
          <option value="" disabled selected>Choisissez une catégorie</option>
          <option value="Créa visuel">Créa visuel</option>
          <option value="Montage vidéo">Montage vidéo</option>
          <option value="Campagne média">Campagne média</option>
          <option value="Projet design">Projet design</option>
        </select>
      </div>

      <div class="mb-8">
        <label for="file_type" class="block text-gray-900 font-semibold mb-3 text-lg">Type de fichier</label>
        <select
          name="file_type"
          id="file_type"
          required
          class="w-full px-5 py-4 rounded-xl border border-gray-300 bg-white focus:outline-none focus:ring-4 focus:ring-blue-500 text-lg transition duration-300"
        >
          <option value="" disabled selected>Choisissez le type de fichier</option>
          <option value="image">Image</option>
          <option value="video">Vidéo</option>
          <option value="pdf">PDF</option>
        </select>
      </div>

      <div class="mb-10">
        <label for="file" class="block text-gray-900 font-semibold mb-3 text-lg">Fichier</label>
        <input
          type="file"
          name="file"
          id="file"
          required
          class="w-full border border-gray-300 rounded-xl cursor-pointer focus:outline-none focus:ring-4 focus:ring-blue-500 text-lg transition duration-300"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-blue-700 hover:bg-blue-800 text-white font-extrabold py-4 rounded-xl text-xl transition duration-300 shadow-lg shadow-blue-600/30"
      >
        Ajouter
      </button>
    </form>
  </div>
</div>

@endsection
