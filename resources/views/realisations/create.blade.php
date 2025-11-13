@extends('layouts.app')

@section('title', 'Créer une Réalisation')

@section('content')
<div class="min-h-screen flex flex-col justify-start items-center pt-20 bg-gradient-to-b from-cyan-400 to-blue-500 px-4">

  <div class="max-w-xl w-full bg-white rounded-3xl shadow-2xl p-12 ring-1 ring-blue-600 mb-8">
    <form action="{{ route('realisations.store') }}" method="POST" enctype="multipart/form-data" novalidate>
      @csrf

      <h2 class="text-4xl font-extrabold mb-12 text-center text-blue-900 tracking-tight">Ajouter une Réalisation</h2>

      <div class="mb-8">
        <label for="title" class="block text-blue-900 font-semibold mb-3 text-lg">Titre <span class="text-red-500">*</span></label>
        <input
          type="text"
          name="title"
          id="title"
          placeholder="Entrez le titre"
          required
          class="w-full px-5 py-4 rounded-2xl border border-blue-300 focus:outline-none focus:ring-4 focus:ring-blue-400 placeholder-blue-300 text-lg transition duration-300 shadow-sm"
        />
      </div>

      <div class="mb-8">
        <label for="category" class="block text-blue-900 font-semibold mb-3 text-lg">Catégorie <span class="text-red-500">*</span></label>
        <select
          name="category"
          id="category"
          required
          class="w-full px-5 py-4 rounded-2xl border border-blue-300 bg-white focus:outline-none focus:ring-4 focus:ring-blue-400 text-lg transition duration-300 shadow-sm"
        >
          <option value="" disabled selected>Choisissez une catégorie</option>
          <option value="Créa visuel">Créa visuel</option>
          <option value="Montage vidéo">Montage vidéo</option>
          <option value="Campagne média">Campagne média</option>
          <option value="Projet design">Projet design</option>
        </select>
      </div>

      <div class="mb-8">
        <label for="file_type" class="block text-blue-900 font-semibold mb-3 text-lg">Type de fichier <span class="text-red-500">*</span></label>
        <select
          name="file_type"
          id="file_type"
          required
          class="w-full px-5 py-4 rounded-2xl border border-blue-300 bg-white focus:outline-none focus:ring-4 focus:ring-blue-400 text-lg transition duration-300 shadow-sm"
        >
          <option value="" disabled selected>Choisissez le type de fichier</option>
          <option value="image">Image</option>
          <option value="video">Vidéo</option>
          <option value="pdf">PDF</option>
        </select>
      </div>

      <div class="mb-10">
        <label for="file" class="block text-blue-900 font-semibold mb-3 text-lg">Fichier <span class="text-red-500">*</span></label>
        <input
          type="file"
          name="file"
          id="file"
          required
          class="w-full border border-blue-300 rounded-2xl cursor-pointer focus:outline-none focus:ring-4 focus:ring-blue-400 text-lg transition duration-300 shadow-sm"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-extrabold py-4 rounded-2xl text-xl transition duration-300 shadow-lg shadow-blue-700/40"
      >
        Ajouter
      </button>
    </form>
  </div>

  <form method="POST" action="{{ route('logout') }}" class="w-full max-w-xl">
      @csrf
      <button type="submit" class="w-full px-6 py-3 bg-red-600 text-black font-semibold rounded-2xl hover:bg-red-700 transition duration-300 shadow-md">
          Se déconnecter
      </button>
  </form>

</div>
@endsection
