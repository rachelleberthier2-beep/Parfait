@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<section class="py-20 text-center bg-[#000000] min-h-[250px] md:min-h-[300px] flex flex-col justify-center">
    <h1 class=" text-4xl  md:text-5xl text-white font-bold mb-4">Mon Blog</h1>
</section>

<section class="py-16 max-w-6xl mx-auto px-6">

    {{-- Boutons de filtres --}}
    <div class="flex justify-center flex-wrap gap-3 mb-10">
        <a href="{{ route('blog') }}"
            class="px-5 py-2 rounded-lg {{ request('category') ? 'border hover:bg-gray-100' : 'bg-blue-600 text-white' }}">
            Tous
        </a>

        @foreach ($categories as $cat)
            <a href="{{ route('blog', ['category' => $cat]) }}"
                class="px-5 py-2 rounded-lg {{ request('category') === $cat ? 'bg-blue-600 text-white' : 'border hover:bg-gray-100' }}">
                {{ $cat }}
            </a>
        @endforeach
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

</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let currentPage = {{ $posts->currentPage() }};
        const lastPage = {{ $posts->lastPage() }};
        let currentCategory = "{{ request('category') ?? '' }}";

        const postsContainer = document.getElementById('posts-container');
        const loadMoreBtn = document.getElementById('loadMoreBtn');

        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', () => {
                if (currentPage >= lastPage) {
                    loadMoreBtn.style.display = 'none';
                    return;
                }

                currentPage++;

                fetch(`{{ route('blog') }}?category=${currentCategory}&page=${currentPage}`, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(response => response.text())
                .then(html => {
                    postsContainer.insertAdjacentHTML('beforeend', html);

                    if (currentPage >= lastPage) {
                        loadMoreBtn.style.display = 'none';
                    }
                })
                .catch(err => console.error(err));
            });
        }
    });
</script>
@endsection
