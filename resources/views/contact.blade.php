@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section 
  class=" min-h-[200px] md:min-h-[640px] py-20 text-center relative bg-gray-50 flex items-center" 
  style="background-image: url('{{ asset('images/tools/Moi.jpg') }}'); background-size: cover; md:background-size: cover; background-position: center; background-repeat: no-repeat;"
>
  <!-- Superposition sombre pour améliorer la lisibilité -->
  <div class="absolute inset-0 bg-black opacity-40"></div>

  <!-- Contenu au-dessus de la superposition -->
  <div class="relative max-w-3xl mx-auto text-white">
    <h1 class=" text-4xl  md:text-5xl font-bold mb-4">Contactez-moi</h1>
    <p class="text-white text-1xl md:text-2xl">Remplissez le formulaire ci-dessous pour me laisser un message.</p>
  </div>
</section>



<section class="py-16 ">
  <div class="max-w-7xl mx-auto px-6" data-aos="fade-right">
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      {{-- Formulaire de contact (à gauche) --}}
      <form action="{{ route('send.email') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md space-y-6 min-h-[500px]">
    @csrf
    <div>
      <label for="name" class="block text-gray-700 font-semibold mb-2 text-gray-600 text-lg md:text-xl">Nom complet</label>
      <input type="text" id="name" name="name" required
             class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-600" />
    </div>

    <div>
      <label for="email" class="block text-gray-700 font-semibold mb-2 text-gray-600 text-lg md:text-xl">Email</label>
      <input type="email" id="email" name="email" required
             class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-600" />
    </div>

    <div>
      <label for="subject" class="block text-gray-700 font-semibold mb-2 text-gray-600 text-lg md:text-xl">Objet du message</label>
      <input type="text" id="subject" name="subject" required
             class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-600" />
    </div>

    <div>
      <label for="message" class="block text-gray-700 font-semibold mb-2 text-gray-600 text-lg md:text-xl">Message</label>
      <textarea id="message" name="message" rows="5" required
                class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-600 resize-none"></textarea>
    </div>

    <button type="submit"
            class="text-black font-bold px-6 py-3 rounded-md hover:bg-blue-700 transition  text-gray-600 text-lg md:text-xl" style="background-color: #17e5f3;">
      Envoyer
    </button>
</form>

      {{-- Colonne droite : Parfait Tozo / Coordonnées / Réseaux sociaux --}}
      <div class="space-y-10" data-aos="fade-left">
        {{-- Parfait Tozo --}}
        <div class="bg-white p-6 rounded-lg shadow-md  min-h-[150px] py-12">
            <div class="flex items-center space-x-4 mb-6">
              {{-- Cercle coloré --}}
               <div class="w-20 h-20 rounded-full overflow-hidden">
                  <img 
                     src="{{ asset('images/tools/Parfait.png') }}"
                     class="object-cover  w-20 h-20"
                  />
               </div>

                  {{-- Texte --}}
               <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Parfait TOZO</h2>
            </div>
            <p class="text-gray-600 text-lg md:text-xl leading-relaxed">
               Expert en communication digitale, je vous accompagne pour booster votre visibilité et créer des stratégies efficaces adaptées à vos besoins.
            </p>
        </div>

        {{-- Coordonnées --}}
        <div class="bg-white p-6 rounded-lg shadow-md min-h-[150px]">
          
             <h2 class="text-4xl font-extrabold text-gray-900 mb-4 pb-12">Coordonnées</h2>
            <ul class="space-y-4 text-gray-700">
              <li class="flex items-center space-x-3">
      {{-- Téléphone --}}
      <a href="" class="w-8 h-8 p-1 border border-[#17e5f3] rounded bg-[#ebf6f6] ;" stroke-width="2">
                    <img src="{{ asset('images/tools/icons8-ph.png') }}" alt="Profile" class="md:object-contain w-6 h-6">

        </a>
            <span>+229 01 97 29 41 55</span>
              </li>
    <li class="flex items-center space-x-3">
      {{-- Email --}}
      <a href="" class="w-8 h-8 p-1 border border-[#17e5f3] rounded bg-[#ebf6f6] ;" stroke-width="2">
                    <img src="{{ asset('images/tools/icons8-e.png') }}" alt="Profile" class="md:object-contain w-6 h-6">

        </a>
      <span class="text-gray-600 text-lg md:text-xl">tozoparfait4@gmail.com</span>
    </li>
    <li class="flex items-center space-x-3">
      {{-- Localisation --}}
      <a href="" class="w-8 h-8 p-1 border border-[#17e5f3] rounded bg-[#ebf6f6] ;"  stroke-width="2">
                    <img src="{{ asset('images/tools/icons8-l.png') }}" alt="Profile" class="md:object-contain w-6 h-6">

        </a>
      <span class="text-gray-600 text-lg md:text-xl">Cotonou, Bénin</span>
    </li>
  </ul>
</div>

        {{-- Réseaux sociaux --}}
        <div class="bg-white p-6 rounded-lg shadow-md min-h-[150px]">
          <h2 class="text-4xl font-extrabold text-gray-900 mb-4  pb-12">Réseaux sociaux</h2>
          <div class="flex space-x-6">
            <a href="https://www.facebook.com/share/17MR87bBio/?mibextid=wwXIfr" target="_blank"  aria-label="Facebook" class="hover:text-blue-900 inline-block p-1 border border-[#17e5f3] rounded  w-10 h-10  bg-[#ebf6f6]">
            <img src="{{ asset('images/tools/icons8-f.png') }}" alt="Profile" class="md:object-contain w-8 h-8">
            </a>


            <a href="https://www.linkedin.com/in/parfait-tozo-237388249" target="_blank"  aria-label="linkdln" class="hover:text-blue-900 inline-block p-1 border border-[#17e5f3] rounded  w-10 h-10  bg-[#ebf6f6]">
                  <img src="{{ asset('images/tools/icons8-li.png') }}" alt="Profile" class="md:object-cover w-8 h-8">
            </a>

            <a href="https://wa.me/22912345678" target="_blank"  aria-label="Whatsap" class="hover:text-blue-900 inline-block p-1 border border-[#17e5f3] rounded  w-10 h-10  bg-[#ebf6f6]">

                <img src="{{ asset('images/tools/icons8-wh.png') }}" alt="Profile" class="md:object-cover w-8 h-8">
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/parfaitdavila?igsh=MXExeWduaDJ4cXNueA%3D%3D&utm_source=qr" target="_blank"  aria-label="Instagram" class="hover:text-blue-900 inline-block p-1 border border-[#17e5f3] rounded  w-10 h-10  bg-[#ebf6f6]">

                <img src="{{ asset('images/tools/icons8.png') }}" alt="Profile" class="md:object-cover w-8 h-8">  
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
