<form action="{{ route('realisations.store') }}" method="POST" enctype="multipart/form-data"
    class="max-w-xl mx-auto p-8 rounded-xl shadow-lg"
    style="background-color: #17e5f3;">
  @csrf

  <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Ajouter une Réalisation</h2>

  <div class="mb-5">
    <label for="title" class="block text-gray-700 font-medium mb-2">Titre</label>
    <input
      type="text"
      name="title"
      id="title"
      placeholder="Entrez le titre"
      required
      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300 transition"
    />
  </div>

  <div class="mb-5">
    <label for="category" class="block text-gray-700 font-medium mb-2">Catégorie</label>
    <select
      name="category"
      id="category"
      required
      class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-4 focus:ring-blue-300 transition"
    >
      <option value="" disabled selected>Choisissez une catégorie</option>
      <option value="Créa visuel">Créa visuel</option>
      <option value="Montage vidéo">Montage vidéo</option>
      <option value="Campagne média">Campagne média</option>
      <option value="Projet design">Projet design</option>
    </select>
  </div>

  <div class="mb-5">
    <label for="file_type" class="block text-gray-700 font-medium mb-2">Type de fichier</label>
    <select
      name="file_type"
      id="file_type"
      required
      class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-4 focus:ring-blue-300 transition"
    >
      <option value="" disabled selected>Choisissez le type de fichier</option>
      <option value="image">Image</option>
      <option value="video">Vidéo</option>
      <option value="pdf">PDF</option>
    </select>
  </div>

  <div class="mb-6">
    <label for="file" class="block text-gray-700 font-medium mb-2">Fichier</label>
    <input
      type="file"
      name="file"
      id="file"
      required
      class="w-full border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-4 focus:ring-blue-300 transition"
    />
  </div>

  <button
    type="submit"
    class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 rounded-lg transition duration-300"
  >
    Ajouter
  </button>
</form>
