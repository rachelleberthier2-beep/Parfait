@extends('layouts.app')

@section('title', 'Réalisations')

@section('content')
<section class="py-20 text-center bg-[#000000] min-h-[250px] md:min-h-[300px] flex flex-col justify-center">
    <h1 class=" text-4xl md:text-5xl  text-white font-bold mb-4 ">Mes Réalisations</h1>
    <p class="text-white text-1xl md:text-2xl">Découvrez ci-dessous mes réalisations les plus marquantes</p>
</section>

<section class="py-20">
    <div class="max-w-6xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Mes outils</h2>
        <p class="text-gray-600 text-lg md:text-xl mb-12">
            Voici les technologies et logiciels que j'utilise au quotidien pour concevoir mes projets avec efficacité et créativité.
        </p>

        {{-- Grille des outils --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8">
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/Premiere-Pro-logo-Adobe-symbol-professional-video-editing-transparent-png-image.png') }}" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">Premiere-Pro</p>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/Photoshop-logo-Adobe-symbol-digital-creativity-transparent-png-image.png') }}" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">Photoshop</p>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/InDesign-2024-logo-graphic-design-transparent-PNG-image.png') }}" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">InDesign</p>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/lightroom.png') }}" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">Lightroom</p>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/Adobe-Illustrator-2024-Logo-PNG-Transparent-Creative-and-Distinctive-Design.png') }}" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">Adobe-Illustrator</p>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/Adobe-After-Effects-Logo-84.png') }}" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">After-Effects</p>
            </div>
        </div>
    </div>
</section>

{{-- Boutons de filtre --}}
<section class="py-16 max-w-6xl mx-auto px-6">
    <div class="flex justify-center space-x-4 mb-10 flex-wrap gap-3">
        <a href="{{ route('realisations') }}" 
           class="px-5 py-2 rounded-lg {{ is_null($category) ? ' bg-blue-600 text-white' : 'border hover:bg-gray-100' }}">
           Tous
        </a>

        @foreach ($categories as $cat)
            <a href="{{ route('realisations', ['category' => $cat]) }}"
               class="px-5 py-2 rounded-lg {{ $category === $cat ? 'bg-blue-600 text-white' : 'border hover:bg-gray-100' }}">
               {{ $cat }}
            </a>
        @endforeach
    </div>

    {{-- Liste des réalisations --}}
    <div class="grid md:grid-cols-3 gap-8">
        @forelse ($realisations as $real)
            <div 
                class="relative border rounded-lg overflow-hidden shadow-md group cursor-pointer transition-transform duration-300 hover:scale-105"
                onclick="openModal('{{ $real->file_type }}', '{{ asset('storage/' . $real->file_path) }}')">

                {{-- Miniature selon type --}}
                @if($real->file_type === 'image')
                    <img src="{{ asset('storage/' . $real->file_path) }}"
                         class="w-full h-full object-cover transition duration-300 group-hover:opacity-70">

                @elseif($real->file_type === 'video')
                    <video class="w-full h-full object-cover transition duration-300 group-hover:opacity-70" muted>
                        <source src="{{ asset('storage/' . $real->file_path) }}" type="video/mp4">
                    </video>

                @elseif($real->file_type === 'pdf')
                    <div class="w-full h-full bg-gray-100 flex flex-col items-center justify-center">
                        <span class="text-blue-700 text-5xl mb-3">📄</span>
                        <a href="#" 
                           onclick="event.stopPropagation(); openModal('pdf', '{{ asset('storage/' . $real->file_path) }}'); return false;"
                           class="text-blue-600  underline text-sm hover:text-blue-800 z-10">
                            Voir le document PDF
                        </a>
                    </div>
                @endif

                {{-- Overlay --}}
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center text-center text-white transition-opacity duration-300 px-4 pointer-events-none">
                    <h3 class="text-xl font-bold mb-2">{{ $real->title }}</h3>
                    <p class="text-sm">{{ $real->description }}</p>
                </div>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">Aucune réalisation trouvée pour cette catégorie.</p>
        @endforelse
    </div>
</section>

{{-- Modal --}}
<div id="modal" class="fixed inset-0 bg-black bg-opacity-20 flex items-center justify-center hidden z-50">
    <div class="relative max-w-2xl w-full  bg-white rounded-lg overflow-hidden p-1">
        
        <button onclick="closeModal()"
                class="absolute top-3 right-4 text-gray-100 text-4xl font-bold leading-none hover:text-white transition">
            &times;
        </button>

        <div id="modal-content" class="flex justify-center items-center  w-full h-[100vh]"></div>
    </div>
</div>



<script>
    function openModal(type, url) {
        const modal = document.getElementById('modal');
        const content = document.getElementById('modal-content');

        let html = '';

        if (type === 'image') {
    html = `<img src="${url}" alt="Image" 
            class="w-full h-full object-contain rounded-lg shadow-2xl cursor-zoom-out" 
            onclick="closeModal()" />`;
}
        else if (type === 'video') {
            html = `
                <video controls autoplay class="max-w-full max-h-[85vh] rounded">
                    <source src="${url}" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture vidéo.
                </video>
            `;
        } 
        else if (type === 'pdf') {
            html = `
                <embed src="${url}" type="application/pdf"  class="rounded  w-full " />
            `;
        }

        content.innerHTML = html;
        modal.classList.remove('hidden');
        
        // Empêche le scroll du body quand modal ouvert
        document.body.style.overflow = 'hidden';

        // Fermer en cliquant sur le fond noir
        modal.onclick = function(e) {
            if (e.target === modal) closeModal();
        };

        // Fermer avec la touche Escape
        document.onkeydown = function(e) {
            if (e.key === 'Escape') closeModal();
        };
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        const content = document.getElementById('modal-content');

        modal.classList.add('hidden');
        content.innerHTML = '';
        
        // Réactive le scroll du body
        document.body.style.overflow = 'auto';
        
        // Supprime le listener Escape
        document.onkeydown = null;
    }
</script>
@endsection