<form action="{{ route('realisations.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" placeholder="Titre" required class="border p-2 w-full mb-4">

    <select name="category" class="border p-2 w-full mb-4" required>
        <option value="">Catégorie</option>
        <option value="Créa visuel">Créa visuel</option>
        <option value="Montage vidéo">Montage vidéo</option>
        <option value="Campagne média">Campagne média</option>
        <option value="Projet design">Projet design</option>
    </select>

    <select name="file_type" class="border p-2 w-full mb-4" required>
        <option value="">Type de fichier</option>
        <option value="image">Image</option>
        <option value="video">Vidéo</option>
        <option value="pdf">PDF</option>
    </select>

    <input type="file" name="file" required class="border p-2 w-full mb-4">

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter</button>
</form>