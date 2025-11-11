@extends('layouts.app')

@section('title', $post->title)

@section('content')
<section class="py-20 text-center bg-gray-50">
    <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
    <p class="text-gray-500">{{ $post->category }}</p>
</section>

<section class="py-16 max-w-4xl mx-auto px-6 text-left">
    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" 
             alt="{{ $post->title }}" 
             class="w-full h-96 object-cover rounded-lg shadow mb-8">
    @endif

    <div class="text-gray-700 leading-relaxed space-y-6">
        {!! nl2br(e($post->content)) !!}
    </div>

    <div class="mt-10">
        <a href="{{ route('blog') }}" 
           class="inline-block bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
           ← Retour au blog
        </a>
    </div>
</section>
@endsection
