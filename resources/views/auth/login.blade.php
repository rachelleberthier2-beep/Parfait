
@extends('layouts.app')

@section('title', 'Connexion')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4 py-10">
    <div class="max-w-md w-full bg-white p-8 rounded-xl shadow-lg ring-1 ring-gray-300">

        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Se connecter</h1>

        @if ($errors->any())
            <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2">Mot de passe</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-[#17e5f3] font-semibold py-3 rounded-md transition duration-300"
            >
                Se connecter
            </button>
        </form>

    </div>
</div>

@endsection




