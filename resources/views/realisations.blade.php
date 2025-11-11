@extends('layouts.app')

@section('title', 'Réalisations')

@section('content')
<section class="py-20 text-center bg-[#000000] min-h-[300px] flex flex-col justify-center">
    <h1 class="text-5xl  text-white font-bold mb-4 ">Mes Réalisations</h1>
    <p class="text-white text-2xl">Découvrez ci dessous mes réalisations les plus marquants</p>
</section>

<section class="py-20">
    <div class="max-w-6xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Mes outils</h2>
        <p class="text-gray-600 text-lg md:text-xl mb-12">
            Voici les technologies et logiciels que j'utilise au quotidien pour concevoir mes projets avec efficacité et créativité.
        </p>

        {{-- Grille des outils --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8">
            {{-- Exemple d'outil --}}
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/Premiere-Pro-logo-Adobe-symbol-professional-video-editing-transparent-png-image.png') }}" alt="Laravel" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">Premiere-Pro</p>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/Photoshop-logo-Adobe-symbol-digital-creativity-transparent-png-image.png') }}" alt="Tailwind CSS" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">Photoshop</p>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/InDesign-2024-logo-graphic-design-transparent-PNG-image.png') }}" alt="PHP" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">InDesign</p>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/Adobe-Logo-PNG-Design-Brand-Transparent.png') }}" alt="MySQL" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">Design</p>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/Adobe-Illustrator-2024-Logo-PNG-Transparent-Creative-and-Distinctive-Design.png') }}" alt="Photoshop" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
                <p class="text-gray-700 font-semibold text-sm">Adobe-Illustrator</p>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 flex flex-col items-center justify-center group">
                <img src="{{ asset('images/tools/Adobe-After-Effects-Logo-84.png') }}" alt="GitHub" class="w-16 h-16 object-contain mb-3 group-hover:scale-110 transition-transform duration-300">
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
                    <img src="{{ asset('storage/' . $real->file_path) }}" alt="{{ $real->title }}" class="w-full h-60 object-cover transition duration-300 group-hover:opacity-70">
                @elseif($real->file_type === 'video')
                    <video class="w-full h-60 object-cover transition duration-300 group-hover:opacity-70" muted>
                        <source src="{{ asset('storage/' . $real->file_path) }}" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture vidéo.
                    </video>
                @elseif($real->file_type === 'pdf')
            <div class="w-full h-64 bg-gray-100 flex flex-col items-center justify-center">
                <span class="text-blue-700 text-5xl mb-3">📄</span>
                <a href="{{ asset('storage/' . $real->file_path) }}" target="_blank"
                   class="text-blue-600 underline text-sm hover:text-blue-800 z-10"
                   onclick="event.stopPropagation(); openModal('pdf', '{{ asset('storage/' . $real->file_path) }}'); return false;">
                    Voir le document PDF
                </a>
            </div>
        @endif


                {{-- Overlay avec titre + description --}}
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center text-center text-white transition-opacity duration-300 px-4">
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
<div id="modal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center hidden z-50">
    <div class="relative max-w-4xl max-h-[90vh] w-full bg-white rounded-md overflow-auto p-4">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-700 text-2xl font-bold">&times;</button>
        <div id="modal-content" class="flex justify-center items-center"></div>
    </div>
</div>


@endsection



@section('scripts')
<script>
    function openModal(type, url) {
        const modal = document.getElementById('modal');
        const content = document.getElementById('modal-content');
        let html = '';

        if (type === 'image') {
            html = `<img src="${url}" alt="Image" class="max-w-full max-h-[80vh] object-contain" />`;
        } else if (type === 'video') {
            html = `<video controls autoplay class="max-w-full max-h-[80vh] rounded">
                        <source src="${url}" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture vidéo.
                    </video>`;
        } else if (type === 'pdf') {
            html = `<embed src="${url}" type="application/pdf" width="100%" height="80vh" />`;
        }

        content.innerHTML = html;
        modal.classList.remove('hidden');

        modal.onclick = function(e) {
            if (e.target === modal) closeModal();
        };
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        const content = document.getElementById('modal-content');
        modal.classList.add('hidden');
        content.innerHTML = '';
    }
</script>


@endsection
