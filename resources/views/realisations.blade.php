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

       @foreach ($categories as $slug => $label)
    <a href="{{ route('realisations', ['category' => $slug]) }}"
       class="px-5 py-2 rounded-lg {{ $category === $slug ? 'bg-blue-600 text-white' : 'border hover:bg-gray-100' }}">
       {{ $label }}
    </a>
@endforeach

    </div>
      
    <div id="realisations-container" 
     class="grid md:grid-cols-3 gap-8">

    @include('partials.realisations-grid', ['files' => $files])

</div>

@if ($files->hasMorePages())
    <div class="text-center mt-6">
        <button id="load-more-btn"
                data-next-page="{{ $files->currentPage() + 1 }}"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            Voir plus
        </button>
    </div>
@endif

</section>



{{-- Modal --}}
<div id="modal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center hidden z-50">
    <div class="relative bg-white rounded-lg shadow-xl w-[95%] max-w-5xl h-[90vh] overflow-hidden">

        <!-- Bouton fermer -->
        <button onclick="closeModal()"
                class="absolute top-3 right-4 text-gray-700 text-4xl font-bold leading-none hover:text-black transition">
            &times;
        </button>

        <!-- Contenu -->
        <div id="modal-content" class="w-50 h-50 flex justify-center items-center"></div>
    </div>
</div>



<script>
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('load-more-btn');
    if (btn) {
        btn.addEventListener('click', function() {
            const hiddenItems = document.querySelectorAll('#realisations-container > div[style*="display:none"]');
            hiddenItems.forEach(item => {
                item.style.display = 'block';
            });
            btn.style.display = 'none'; // Cache le bouton après avoir affiché tout
        });
    }
});
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const button = document.getElementById("load-more-btn");

    if (!button) return;

    button.addEventListener("click", function () {
        let nextPage = this.getAttribute("data-next-page");
        let category = "{{ $category ?? '' }}";

        let url = "{{ route('realisations') }}?page=" + nextPage;
        if (category) url += "&category=" + category;

        fetch(url, {
            headers: {
                "X-Requested-With": "XMLHttpRequest"
            }
        })
        .then(res => res.text())
        .then(html => {
            document.querySelector("#realisations-container")
                .insertAdjacentHTML("beforeend", html);

            // Mettre à jour la page suivante
            nextPage = Number(nextPage) + 1;
            this.setAttribute("data-next-page", nextPage);

            // Si plus de pages → cacher bouton
            @if ($files->lastPage())
            if (nextPage > {{ $files->lastPage() }}) {
                button.style.display = "none";
            }
            @endif
        });
    });
});
</script>

@endsection