<form action="{{ route('realisations.store') }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
  @csrf

  <div class="mb-6">
    <label for="title" class="block text-gray-700 font-semibold mb-2">Titre</label>
    <input
      type="text"
      name="title"
      id="title"
      placeholder="Titre de la réalisation"
      required
      class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
    />
  </div>

  <div class="mb-6">
    <label for="category" class="block text-gray-700 font-semibold mb-2">Catégorie</label>
    <select
      name="category"
      id="category"
      required
      class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
    >
      <option value="" disabled selected>Choisir une catégorie</option>
      <option value="Créa visuel">Créa visuel</option>
      <option value="Montage vidéo">Montage vidéo</option>
      <option value="Campagne média">Campagne média</option>
      <option value="Projet design">Projet design</option>
    </select>
  </div>

  <div class="mb-6">
    <label for="file_type" class="block text-gray-700 font-semibold mb-2">Type de fichier</label>
    <select
      name="file_type"
      id="file_type"
      required
      class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
    >
      <option value="" disabled selected>Choisir le type de fichier</option>
      <option value="image">Image</option>
      <option value="video">Vidéo</option>
      <option value="pdf">PDF</option>
    </select>
  </div>

  <div class="mb-6">
    <label for="file" class="block text-gray-700 font-semibold mb-2">Fichier</label>
    <input
      type="file"
      name="file"
      id="file"
      required
      class="w-full border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
    />
  </div>

  <button
    type="submit"
    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition"
  >
    Ajouter
  </button>
</form>
