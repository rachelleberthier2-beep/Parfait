<form action="{{ route('realisations.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto p-6 bg-white rounded shadow-md">
    @csrf

    <div class="mb-4">
        <label for="title" class="block mb-1 font-semibold text-gray-700">Titre</label>
        <input
            type="text"
            name="title"
            id="title"
            placeholder="Titre de la réalisation"
            required
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
    </div>

    <div class="mb-4">
        <label for="category" class="block mb-1 font-semibold text-gray-700">Catégorie</label>
        <select
            name="category"
            id="category"
            required
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            <option value="" disabled selected>Choisir une catégorie</option>
            <option value="Créa visuel">Créa visuel</option>
            <option value="Montage vidéo">Montage vidéo</option>
            <option value="Campagne média">Campagne média</option>
            <option value="Projet design">Projet design</option>
        </select>
    </div>

    <div class="mb-4">
        <label for="file_type" class="block mb-1 font-semibold text-gray-700">Type de fichier</label>
        <select
            name="file_type"
            id="file_type"
            required
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            <option value="" disabled selected>Choisir le type de fichier</option>
            <option value="image">Image</option>
            <option value="video">Vidéo</option>
            <option value="pdf">PDF</option>
        </select>
    </div>

    <div class="mb-6">
        <label for="file" class="block mb-1 font-semibold text-gray-700">Fichier</label>
        <input
            type="file"
            name="file"
            id="file"
            required
            class="w-full border border-gray-300 rounded px-3 py-2 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
    </div>

    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded transition-colors duration-300">
        Ajouter
    </button>
</form>
