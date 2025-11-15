<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/css/panneau.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">


</head>

<body class="antialiased text-gray-800 bg-white">

    {{-- HEADER --}}
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between h-16">
            {{-- Logo --}}
            <a href="/" class="text-xl font-bold text-blue-600"><img
                    src="{{ asset('images/tools/Logo original noir.png') }}" class="w-32 h-auto"></a>

            {{-- Menu Desktop --}}
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="relative group text-gray-700">
                    Accueil
                    <span
                        class="absolute left-0 -bottom-1 w-full h-0.5  scale-x-0 group-hover:scale-x-100 transition-transform origin-left"
                        style="background-color: #17e5f3;"></span>
                </a>
                <a href="{{ route('about') }}" class="relative group text-gray-700 ">
                    À propos
                    <span
                        class="absolute left-0 -bottom-1 w-full h-0.5 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"
                        style="background-color: #17e5f3;"></span>
                </a>
                <a href="{{ route('realisations') }}" class="relative group text-gray-700">
                    Réalisations
                    <span
                        class="absolute left-0 -bottom-1 w-full h-0.5  scale-x-0 group-hover:scale-x-100 transition-transform origin-left"
                        style="background-color: #17e5f3;"></span>
                </a>
                <a href="{{ route('blog') }}" class="relative group text-gray-700">
                    Blog
                    <span
                        class="absolute left-0 -bottom-1 w-full h-0.5 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"
                        style="background-color: #17e5f3;"></span>
                </a>
                <a href="{{ route('contact') }}" class="relative group text-gray-700">
                    Contact
                    <span
                        class="absolute left-0 -bottom-1 w-full h-0.5  scale-x-0 group-hover:scale-x-100 transition-transform origin-left"
                        style="background-color: #17e5f3;"></span>
                </a>
            </nav>


            {{-- Burger menu button (mobile) --}}
            <button id="burger-btn" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        {{-- Menu mobile (hidden by default) --}}
        <nav id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <a href="/" class="block px-6 py-3 border-b border-gray-200 hover:bg-gray-100">Accueil</a>
            <a href="{{ route('about') }}" class="block px-6 py-3 border-b border-gray-200 hover:bg-gray-100">À
                propos</a>
            <a href="{{ route('realisations') }}"
                class="block px-6 py-3 border-b border-gray-200 hover:bg-gray-100">Réalisations</a>
            <a href="{{ route('blog') }}" class="block px-6 py-3 border-b border-gray-200 hover:bg-gray-100">Blog</a>
            <a href="{{ route('contact') }}" class="block px-6 py-3 hover:bg-gray-100">Contact</a>
        </nav>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const burgerBtn = document.getElementById('burger-btn');
                const mobileMenu = document.getElementById('mobile-menu');

                burgerBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            });
        </script>
    </header>


    {{-- CONTENU DES PAGES --}}
    <main class="overflow-x-hidden">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="text-gray-300 pt-16" style="background-color: #000000">
        <div class="max-w-7xl- md:mx-auto- px-6-  gap-x-30-">

            {{-- Section Call to Action --}}
            <div class="p-10-  mb-16 text-center text-white">
                <h2 class=" text-2xl md:text-3xl font-bold mb-4">Prêt à développer votre communication ?</h2>
                <p class="mb-8 max-w-xl- mx-auto">Discutons de votre projet et créons ensemble une stratégie de
                    communication efficace</p>
                <a href="{{ route('contact') }}"
                    class="inline-block  text-black font-bold px-8- py-3 rounded-md  transition"
                    style="background-color: #17e5f3;">
                    Démarrer un projet
                </a>
            </div>

            <div class="flex flex-col md:flex-row md:justify-between md:items-start space-y-10 md:space-y-0 gap-x-40 ">

                {{-- Logo + description --}}
                <div class="md:w-1/3 ">
                    <a href="/" class="inline-block mb-6">
                        <img src="{{ asset('images/tools/Communication original.png') }}" class="w-32 h-auto">
                    </a>
                    <p class="text-gray-400 max-w-sm leading-relaxed">
                        Création visuelle & gestion de communication digitale, conçues pour booster votre image.
                    </p>
                </div>

                {{-- Navigation links --}}
                <div class="md:w-4/4 grid grid-cols-2 gap-x-30">
                    <div>
                        <h3 class="text-white font-semibold mb-4">Menu</h3>
                        <ul class="space-y-3">
                            <li><a href="/" class="hover:text-white transition">Accueil</a></li>
                            <li><a href="{{ route('about') }}" class="hover:text-white transition">À propos</a></li>
                            <li><a href="{{ route('realisations') }}"
                                    class="hover:text-white transition">Réalisations</a></li>
                            <li><a href="{{ route('blog') }}" class="hover:text-white transition">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-4">Suivez-nous</h3>
                        <ul class="space-y-3">
                            <li><a href="https://www.facebook.com/share/17MR87bBio/?mibextid=wwXIfr"
                                    class="hover:text-white transition">Facebook</a></li>
                            <li><a href="https://www.instagram.com/parfaitdavila?igsh=MXExeWduaDJ4cXNueA%3D%3D&utm_source=qr"
                                    class="hover:text-white transition">Instagram</a></li>
                            <li><a href="https://www.linkedin.com/in/parfait-tozo-237388249"
                                    class="hover:text-white transition">LinkedIn</a></li>
                            <li><a href="https://wa.me/22997294155" class="hover:text-white transition">WhatsApp</a>
                            </li>
                        </ul>
                    </div>
                </div>


                {{-- Contact --}}
                <div class="md:w-1/3">
                    <h3 class="text-white font-semibold mb-4">Contact</h3>
                    <p class="mb-2">contact@monsite.com</p>
                    <p>+229 01 97 29 41 55</p>
                </div>

            </div>

            {{-- Bas de page --}}
            <div class="mt-12 border-t border-gray-700 pt-6 text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} Parfait Communication. Tous droits réservés.
                <p> Crée par ZEVOUNOU Yélian</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Durée en ms
            once: true, // Animation une seule fois
        });
    </script>

</body>

</html>
