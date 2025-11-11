<div class="grid md:grid-cols-3 gap-8">
    @forelse ($posts as $post)
        <div class="border rounded-lg p-4 shadow-sm hover:shadow-md transition">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                     class="w-full h-48 object-cover rounded-md mb-4">
            @endif
            <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
            <p class="text-gray-600 mb-3">{{ $post->excerpt }}</p>
            <a href="{{ route('blog.show', $post->id) }}"  class="text-blue-600 font-medium hover:underline">Lire la suite</a>
        </div>
    @empty
        <p class="text-center text-gray-500 col-span-3">Aucun article trouvé pour cette catégorie.</p>
    @endforelse
</div>
