@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<section class="bg-[#000000] text-center py-16 min-h-[300px] flex flex-col justify-center">
    <h1 class="text-5xl text-white font-bold mb-4">À propos de moi</h1>
    <p class="max-w-3xl mx-auto text-2xl text-white">Découvrez l'humain et la passion derrière Parfait communication</p>
</section>



<section class="max-w-7xl mx-auto px-6 py-20 flex justify-center">
  <div class="flex flex-col md:flex-row items-center justify-center gap-20 w-full md:w-10/12">
    
    {{-- Image avec ombre légère derrière --}}
    <div class="relative w-50 md:w-150 max-w-lg flex justify-center"  data-aos="fade-left">
      <div class="absolute inset-0 bg-blue-300 rounded-lg opacity-10 -translate-x-2 -translate-y-0 rotate-8 scale-y-104"></div>
      <img 
        src="{{ asset('images/tools/Parfait2_3677.jpg') }}" 
        alt="Parfait Tozo" 
        class="relative rounded-lg shadow-sm object-contain w-full h-auto  z-10"
      />
    </div>

    {{-- Texte à droite --}}
    <div class="w-full md:w-1/2" data-aos="fade-right">
      <h2 class="text-5xl font-bold mb-6 leading-tight">Parfait TOZO</h2>
      <p class="text-gray-600 text-sm md:text-lg leading-relaxed text-justify mb-2">
        Ma conviction est simple : la communication la plus efficace est celle qui comprend profondément l'humain. C'est pourquoi j'ai allié ma formation de socio-anthropologue du développement à une expertise pointue en communication digitale.
      </p>
      <p class="text-gray-600 text-sm md:text-lg leading-relaxed text-justify mb-2"> 
        Mon approche ne consiste pas seulement à créer de beaux visuels ou des slogans accrocheurs. J'immerge mes analyses dans vos contextes locaux pour comprendre les dynamiques culturelles et sociales qui animent vos publics. Le but est de proposer des stratégies et des contenus qui ne parlent pas seulement à votre audience, mais avec elle.
      </p>
      <p class="text-gray-600 text-sm md:text-lg  leading-relaxed text-justify mb-2">  
        J'ai eu l'opportunité de mettre cette vision en pratique auprès de partenaires variés, qu'il s'agisse d'organisations non gouvernementales, d'entreprises à impact social ou d'institutions. J'ai piloté pour eux des campagnes de communication sur des sujets essentiels comme la santé ou la transition écologique. J'ai par exemple conduit l'initiative ECO-U, un projet conçu pour éveiller la conscience environnementale et encourager l'action au sein du milieu étudiant.
      </p>
      <p class="text-gray-600 text-sm md:text-lg leading-relaxed text-justify mb-2">
        Mon objectif est de vous aider à amplifier votre impact social, culturel ou environnemental.
      </p>
    </div>

  </div>
</section>


<section class="py-16 bg-white" aria-labelledby="mes-valeurs-title">
  <div class="max-w-7xl mx-auto px-6 lg:px-8  bg-gray-50 py-12">
    <h2 id="mes-valeurs-title" class="text-4xl font-extrabold text-gray-900 mb-12 text-center">
      Mes Valeurs
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
      @php
  $valeurs = [
    ['title' => 'Créativité', 'desc' => 'Innovation constante dans chaque projet', 'icon' => 'lightbulb'],
    ['title' => 'Innovation', 'desc' => 'Technologies et méthodes de pointe', 'icon' => 'rocket'],
    ['title' => 'Rigueur', 'desc' => 'Précision et attention aux détails', 'icon' => 'search'],
    ['title' => 'Proximité Client', 'desc' => 'Écoute et collaboration étroite', 'icon' => 'handshake'],
  ];

  // Mapping simple des SVG (tu peux remplacer par tes propres SVG)
  $icons = [
    'lightbulb' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2a7 7 0 00-4 12.9V17a2 2 0 002 2h4a2 2 0 002-2v-2.1A7 7 0 0012 2z"/></svg>',
    'rocket' => '
<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="#17e5f3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/>
</svg>',

    'search' => '
<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" stroke="#17e5f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
  <circle cx="11" cy="11" r="7" />
  <path d="M21 21l-4.35-4.35" />
</svg>',

   'handshake' =>'<img src="'.asset('images/tools/icons.png').'" alt="Profile" class="md:object-cover w-20 h-20">',

  ];
@endphp

       @foreach($valeurs as $valeur)
        <div class="p-6 rounded-2xl bg-white shadow-md hover:shadow-xl hover:bg-gray-50 transition-all duration-500 transform hover:-translate-y-1 cursor-pointer opacity-0 translate-y-8" data-animate>
          <div class="text-[#17e5f3] mb-5 flex justify-center">
            {!! $icons[$valeur['icon']] ?? '' !!}
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">{{ $valeur['title'] }}</h3>
          <p class="text-gray-600 text-lg md:text-xl leading-relaxed text-center">{{ $valeur['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>

  <script>
    // Simple animation au scroll pour fade in + translation Y
    document.addEventListener('DOMContentLoaded', () => {
      const elements = document.querySelectorAll('[data-animate]');
      const options = { threshold: 0.1 };
      
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.remove('opacity-0', 'translate-y-8');
            entry.target.classList.add('opacity-100', 'translate-y-0');
            observer.unobserve(entry.target);
          }
        });
      }, options);
      
      elements.forEach(el => observer.observe(el));
    });
  </script>
</section>



<section id="skills-section" class="max-w-7xl mx-auto px-6 py-20 bg-white">
  <div class="flex flex-col md:flex-row items-center gap-12">
    
    {{-- Colonne compétences à gauche --}}
    <div class="w-full md:w-1/2">
      <div class="mb-14 text-center md:text-left">
        <h2 class="text-4xl font-extrabold mb-6 text-gray-900">Mes compétences</h2>
        <p class="text-gray-600 text-lg md:text-xl max-w-xl">
          Des savoir-faire clés pour accompagner votre stratégie de communication digitale.
        </p>
      </div>

      <div class="space-y-5 max-w-xl" data-aos="fade-left" >
        @php
          $skills = [
            ['label' => 'Stratégie de Communication', 'percent' => 96],
            ['label' => 'Community Management', 'percent' => 95],
            ['label' => 'Graphisme', 'percent' => 90],
            ['label' => 'Community Management', 'percent' => 95],
            ['label' => 'Motion Design', 'percent' => 80],
            ['label' => 'Photographie', 'percent' => 90],
            ['label' => 'Montage Vidéo', 'percent' => 85],
            ['label' => 'SEO & Référencement', 'percent' => 75],
            ['label' => 'SEA & Référencement', 'percent' => 60],
            ['label' => 'Publicité Médias', 'percent' => 88],
            ['label' => 'Formation & Consultation', 'percent' => 80],
            ['label' => 'Chatbuilding', 'percent' => 75],
          ];
        @endphp

        @foreach ($skills as $skill)
        <div>
          <div class="flex justify-between mb-1">
            <span class="text-gray-700 font-medium">{{ $skill['label'] }}</span>
            <span class="text-gray-700 font-medium">{{ $skill['percent'] }}%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-4 overflow-hidden">
            {{-- Barre de progression animée --}}
            <div 
              class="h-4 rounded-full transition-all duration-1000 ease-out" style="background-color: #00708c;"
              data-percent="{{ $skill['percent'] }}"
              style="width: 0%"
            ></div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Colonne image à droite --}}
    <div class="w-full md:w-160 h-full md:h-185  pt-20" data-aos="fade-right">
      <img 
        src="{{ asset('images/tools/Photo shoot 2-2.jpg') }}"  
        alt="Mes compétences illustration" 
        class="rounded-lg shadow-lg object-cover w-full h-full"
      />
    </div>

  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const skillSection = document.getElementById('skills-section');
      const progressBars = skillSection.querySelectorAll('div[data-percent]');
      let animated = false;

      function animateBars() {
        if (animated) return; // Une seule fois

        const rect = skillSection.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;

        // Si la section est visible
        if (rect.top <= windowHeight && rect.bottom >= 0) {
          progressBars.forEach(bar => {
            const percent = bar.getAttribute('data-percent');
            bar.style.width = percent + '%';
          });
          animated = true;
          window.removeEventListener('scroll', animateBars);
        }
      }

      window.addEventListener('scroll', animateBars);
      animateBars(); // check au chargement au cas où
    });
  </script>
</section>


<section class="max-w-7xl mx-auto px-6 py-20 bg-white">
  <div class="max-w-3xl mx-auto text-center mb-16">
    <h2 class="text-4xl font-extrabold mb-6 text-gray-900">Mon parcours</h2>
    <p class="text-gray-600 text-lg md:text-xl">
      Découvrez mon cheminement professionnel, mes expériences clés et mes acquis.
    </p>
  </div>

  <div class="relative max-w-4xl mx-auto">
    {{-- Ligne verticale centrale --}}
    <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 transform -translate-x-1/2" style="background-color: #17e5f3;"></div>

    <div class="space-y-12">
      @php
        $journeys = [
          [
            'date' => '2020 - 2022',
            'title' => 'Développeur Web Junior',
            'description' => 'Développement de sites web et applications, amélioration des performances et optimisation SEO.',
            'side' => 'left',
          ],
          [
            'date' => '2018 - 2020',
            'title' => 'Assistant en Communication',
            'description' => 'Gestion des réseaux sociaux, création de contenu et organisation d’événements.',
            'side' => 'right',
          ],
          [
            'date' => '2016 - 2018',
            'title' => 'Stagiaire en Marketing Digital',
            'description' => 'Participation à des campagnes marketing, analyse de données et suivi des résultats.',
            'side' => 'left',
          ],
          [
      'date' => '2016 - 2018',
      'title' => 'Stagiaire en Marketing Digital',
      'description' => 'Participation à des campagnes marketing, analyse de données et suivi des résultats.',
      'side' => 'right',
    ],
        ];
      @endphp

      @foreach ($journeys as $journey)
      <div class="md:flex md:justify-between md:items-center relative opacity-0 transform translate-y-10 transition duration-700 ease-out scroll-reveal">
        @if ($journey['side'] === 'left')
          <div class="md:w-1/2 md:pr-8 text-right md:text-left">
            <div class="bg-white p-6 rounded-lg shadow-[0_0_15px_rgba(0,0,0,0.15)] min-h-[300px]">
      <p class="text-blue-600 font-semibold mb-5">{{ $journey['date'] }}</p>
      <h3 class="text-xl font-bold mb-5">{{ $journey['title'] }}</h3>
      <p class="text-gray-600">{{ $journey['description'] }}</p>
    </div>
          </div>
          {{-- Cercle central --}}
          <div class="hidden md:flex items-center justify-center w-4 h-4  rounded-full absolute left-1/2 transform -translate-x-1/2 top-10 z-10" style="background-color: #17e5f3;"></div>
          <div class="hidden md:block absolute left-1/2 top-16 w-1 h-full  transform -translate-x-1/2 z-0" style="background-color: #17e5f3;"></div>
          <div class="md:w-1/2"></div>
        @else
          <div class="md:w-1/2"></div>
          {{-- Cercle central --}}
          <div class="hidden md:flex items-center justify-center w-4 h-4  rounded-full absolute left-1/2 transform -translate-x-1/2 top-10 z-10" style="background-color: #17e5f3;"></div>
          <div class="hidden md:block absolute left-1/2 top-16 w-1 h-full  transform -translate-x-1/2 z-0" style="background-color: #17e5f3;"></div>
          <div class="md:w-1/2 md:pl-8 text-left">
            <div class="bg-white p-6 rounded-lg shadow-[0_0_15px_rgba(0,0,0,0.15)] min-h-[300px]">
      <p class="text-blue-600 font-semibold mb-5">{{ $journey['date'] }}</p>
      <h3 class="text-xl font-bold mb-5">{{ $journey['title'] }}</h3>
      <p class="text-gray-600">{{ $journey['description'] }}</p>
    </div>
          </div>
        @endif
      </div>
      @endforeach
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const revealElements = document.querySelectorAll('.scroll-reveal');

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          entry.target.classList.remove('opacity-0', 'translate-y-10');
          entry.target.classList.add('opacity-100', 'translate-y-0');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });

    revealElements.forEach(el => {
      observer.observe(el);
    });
  });
</script>

<style>
  /* Pour une transition fluide, ajoute ces règles si besoin */
  .opacity-0 {
    opacity: 0;
  }
  .opacity-100 {
    opacity: 1;
    transition: opacity 0.7s ease-out;
  }
  .translate-y-10 {
    transform: translateY(2.5rem); /* 10 * 0.25rem */
  }
  .translate-y-0 {
    transform: translateY(0);
    transition: transform 0.7s ease-out;
  }
</style>





@endsection
