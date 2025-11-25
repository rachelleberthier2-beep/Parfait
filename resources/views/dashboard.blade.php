@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')

<div class="min-h-screen  bg-gray-50 flex flex-col items-center pt-20 px-4">

    <div class="max-w-xl w-full  rounded-3xl shadow-2xl p-12 ring-1 ring-blue-600 mb-8">
 
    <h1 class="text-4xl text-center font-extrabold mb-10 text-gray-800">Bienvenue, <span class="text-blue-600">{{ auth()->user()->name }}</span></h1>

    <nav class="mb-12 w-full max-w-md">
        <ul class="space-y-6">
            <li>
                <a href="{{ url('/post/create') }}" class="block text-center py-4 bg-blue-700 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                    Ajouter un article
                </a>
            </li>
            <li>
                <a href="{{ url('/realisations/create') }}" class="block text-center py-4 bg-blue-700 text-white font-semibold rounded-lg shadow hover:bg-green-700 transition">
                    Ajouter une réalisation
                </a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('logout') }}" class="w-full max-w-md">
        @csrf
        <button 
            type="submit" 
            class="w-full py-3 bg-white  text-blue font-semibold rounded-lg hover:bg-red-700 transition shadow"
        >
            Se déconnecter
        </button>
    </form>
    </div>
    
</div>
@endsection
