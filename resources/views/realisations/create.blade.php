<!-- Conteneur avec centrage horizontal et marge haute -->
<div class="min-h-screen flex justify-center pt-16 bg-gray-100 px-4">
  <!-- Div contenant le formulaire et la couleur de fond -->
  <div class="max-w-xl w-full bg-[#17e5f3] rounded-xl shadow-lg p-10">
    <form action="{{ route('realisations.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <h2 class="text-3xl font-bold mb-8 text-center text-gray-900">Ajouter une Réalisation</h2>

      <div class="mb-6">
        <label for="title" class="block text-gray-900 font-semibold mb-3">Titre</label>
        <input
          type="text"
          name="title"
          id="title"
          placeholder="Entrez le titre"
          required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-4 focus:ring-blue-400 transition"
        />
      </div>

      <div class="mb-6">
        <label for="category" class="block text-gray-900 font-semibold mb-3">Catégorie</label>
        <select
          name="category"
          id="category"
          required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white focus:outline-none focus:ring-4 focus:ring-blue-400 transition"
        >
          <option value="" disabled selected>Choisissez une catégorie</option>
          <option value="Créa visuel">Créa visuel</option>
          <option value="Montage vidéo">Montage vidéo</option>
          <option value="Campagne média">Campagne média</option>
          <option value="Projet design">Projet design</option>
        </select>
      </div>

      <div class="mb-6">
        <label for="file_type" class="block text-gray-900 font-semibold mb-3">Type de fichier</label>
        <select
          name="file_type"
          id="file_type"
          required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white focus:outline-none focus:ring-4 focus:ring-blue-400 transition"
        >
          <option value="" disabled selected>Choisissez le type de fichier</option>
          <option value="image">Image</option>
          <option value="video">Vidéo</option>
          <option value="pdf">PDF</option>
        </select>
      </div>

      <div class="mb-8">
        <label for="file" class="block text-gray-900 font-semibold mb-3">Fichier</label>
        <input
          type="file"
          name="file"
          id="file"
          required
          class="w-full border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-4 focus:ring-blue-400 transition"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 rounded-lg transition duration-300"
      >
        Ajouter
      </button>
    </form>
  </div>
</div>
