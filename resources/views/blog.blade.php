@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<section class="py-20 text-center bg-[#000000] min-h-[250px] md:min-h-[300px] flex flex-col justify-center">
    <h1 class=" text-4xl  md:text-5xl text-white font-bold mb-4">Mon Blog</h1>
</section>

<section class="py-16 max-w-6xl mx-auto px-6">

    {{-- Boutons de filtres --}}
    <div class="flex justify-center flex-wrap gap-3 mb-10" id="blog-filters">
    <button data-category="" class="filter-btn px-5 py-2 rounded-lg bg-blue-600 text-white">
        Tous
    </button>

    @foreach ($categories as $cat)
        <button data-category="{{ $cat }}"
            class="filter-btn px-5 py-2 rounded-lg border hover:bg-gray-100">
            {{ $cat }}
        </button>
    @endforeach
    </div>

    </div>

    {{-- Container des posts pour AJAX --}}
    <div id="posts-container">
        @include('partials.blog-posts', ['posts' => $posts])
    </div>

    {{-- Bouton Voir Plus --}}
    @if ($posts->hasMorePages())
        <div class="text-center mt-8">
            <button id="loadMoreBtn" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Voir plus
            </button>
        </div>
    @endif
    {{-- pagination --}}
    {{ $posts->links() }}

</section>


<script>
document.addEventListener('DOMContentLoaded', () => {

    let currentCategory = ""; // categorie active
    let currentPage = 1;

    const postsContainer = document.getElementById('posts-container');
    let loadMoreBtn = document.getElementById('loadMoreBtn');
    const filters = document.querySelectorAll('.filter-btn');

    // 🔵 Chargement AJAX
    function loadPosts(reset = false) {
        fetch(`{{ route('blog') }}?category=${currentCategory}&page=${currentPage}`, {
            headers: { "X-Requested-With": "XMLHttpRequest" }
        })
        .then(res => res.text())
        .then(html => {

            if (reset) {
                postsContainer.innerHTML = html;
            } else {
                postsContainer.insertAdjacentHTML('beforeend', html);
            }

            // Gérer le bouton "Voir plus"
            const newBtn = document.getElementById('loadMoreBtn');

            if (newBtn) {
                loadMoreBtn = newBtn;
                loadMoreBtn.onclick = loadMore;
            } else if (loadMoreBtn) {
                loadMoreBtn.style.display = "none";
            }
        });
    }

    // 🔵 Load More
    function loadMore() {
        currentPage++;
        loadPosts();
    }

    // 🔵 Click sur un filtre
    filters.forEach(btn => {
        btn.addEventListener('click', () => {

            // change design actif
            filters.forEach(f => f.classList.remove('bg-blue-600', 'text-white'));
            btn.classList.add('bg-blue-600', 'text-white');

            currentCategory = btn.dataset.category;
            currentPage = 1;

            loadPosts(true);
        });
    });

    // Attacher load more si bouton existe
    if (loadMoreBtn) {
        loadMoreBtn.onclick = loadMore;
    }
});
</script>

@endsection
