@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<section class="bg-[#000000] text-center py-16 min-h-[250px] md:min-h-[300px] flex flex-col justify-center">
    <h1 class="text-4xl  md:text-5xl text-white font-bold mb-4">À propos de moi</h1>
    <p class="max-w-3xl mx-auto  text-1xl md:text-2xl text-white">Découvrez l'humain et la passion derrière Parfait communication</p>
</section>



<section class="max-w-7xl mx-auto px-6 py-20 flex justify-center">
  <div class="flex flex-col md:flex-row items-center justify-center gap-20 w-full md:w-10/12">
    
    {{-- Image avec ombre légère derrière --}}
    <div class="relative  max-w-lg flex justify-center"  data-aos="fade-right">
      <img 
        src="{{ asset('images/tools/Parfait2_3677.jpg') }}" 
        alt="Parfait Tozo" 
        class="relative rounded-lg shadow-sm  object-cover  md:object-cover md:w-full md:h-auto  z-10"
      />
    </div>


    {{-- Texte à droite --}}
    <div class="w-full md:w-1/2" data-aos="fade-left">
  <h2 class="text-3xl md:text-5xl font-bold mb-6 leading-tight text-center md:text-left">
    Parfait TOZO
  </h2>
  <p class="text-black text-base md:text-lg leading-relaxed md:max-w-prose  text-justify mb-4">
    Ma conviction est simple : la communication la plus efficace est celle qui comprend profondément l'humain. C'est pourquoi j'ai allié ma formation de socio-anthropologue du développement à une expertise pointue en communication digitale.
  </p>
  <p class="text-black text-base md:text-lg leading-relaxed md:max-w-prose  text-justify mb-4"> 
    Mon approche ne consiste pas seulement à créer de beaux visuels ou des slogans accrocheurs. J'immerge mes analyses dans vos contextes locaux pour comprendre les dynamiques culturelles et sociales qui animent vos publics. Le but est de proposer des stratégies et des contenus qui ne parlent pas seulement à votre audience, mais avec elle.
  </p>
  <p class="text-black text-base md:text-lg leading-relaxed md:max-w-prose  text-justify mb-4">  
    J'ai eu l'opportunité de mettre cette vision en pratique auprès de partenaires variés, qu'il s'agisse d'organisations non gouvernementales, d'entreprises à impact social ou d'institutions. J'ai piloté pour eux des campagnes de communication sur des sujets essentiels comme la santé ou la transition écologique. J'ai par exemple conduit l'initiative ECO-U, un projet conçu pour éveiller la conscience environnementale et encourager l'action au sein du milieu étudiant.
  </p>
  <p class="text-black text-base md:text-lg leading-relaxed md:max-w-prose  text-justify mb-4">
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

   'handshake' =>'<img src="'.asset('images/tools/Client.png').'" alt="Profile" class="md:object-cover w-20 h-20">',

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

      <div class="space-y-6 max-w-xl" data-aos="fade-left">
        @php
          $skills = [
            ['label' => 'Stratégie de Communication', 'percent' => 96],
            ['label' => 'Community Management', 'percent' => 95],
            ['label' => 'Graphisme', 'percent' => 90],
            ['label' => 'Motion Design', 'percent' => 80],
            ['label' => 'Photographie', 'percent' => 90],
            ['label' => 'Montage Vidéo', 'percent' => 85],
            ['label' => 'SEO & Référencement', 'percent' => 75],
            ['label' => 'Publicité Médias', 'percent' => 88],
            ['label' => 'Formation & Consultation', 'percent' => 80],
            ['label' => 'Automatisation', 'percent' => 75],
          ];
        @endphp

        @foreach ($skills as $skill)
        <div>
          <div class="flex justify-between mb-1">
            <span class="text-gray-700 font-medium">{{ $skill['label'] }}</span>
            <span class="text-gray-700 font-medium counter" data-target="{{ $skill['percent'] }}">0%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-4 overflow-hidden">
            {{-- Barre de progression animée --}}
            <div 
              class="progress-bar h-4 rounded-full transition-all duration-[1500ms] ease-out"
              style="background-color: #17e5f3; width: 0%;"
              data-percent="{{ $skill['percent'] }}"
            ></div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Colonne image à droite --}}
    <div class="w-full md:w-160 h-full md:h-185 pt-20" data-aos="fade-right">
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
  const progressBars = skillSection.querySelectorAll('.progress-bar');
  const counters = skillSection.querySelectorAll('.counter');
  
  let animationDone = false; // Flag pour bloquer la répétition

  function animateBars() {
    const rect = skillSection.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;

    // Vérifie si la section est visible à l’écran
    if (!animationDone && rect.top < windowHeight * 0.85 && rect.bottom > 0) {
      animationDone = true; // On lance une fois et on bloque après

      progressBars.forEach((bar, i) => {
        const percent = parseInt(bar.getAttribute('data-percent'));
        const counter = counters[i];

        // Reset avant animation
        bar.style.width = '0%';
        counter.textContent = '0%';

        let start = null;
        const duration = 1000; // Durée totale animation 3s

        function step(timestamp) {
          if (!start) start = timestamp;
          const elapsed = timestamp - start;
          const progress = Math.min(elapsed / duration, 1);

          const currentPercent = Math.floor(progress * percent);
          bar.style.width = currentPercent + '%';
          counter.textContent = currentPercent + '%';

          if (elapsed < duration) {
            requestAnimationFrame(step);
          } else {
            // Assure affichage final exact
            bar.style.width = percent + '%';
            counter.textContent = percent + '%';
          }
        }

        requestAnimationFrame(step);
      });
    }
  }

  window.addEventListener('scroll', animateBars);
  animateBars(); // Vérifie au chargement
});

</script>


  <style>
    /* Optionnel : animation fluide sur la largeur */
    .progress-bar {
      transition: width 1.5s ease-in-out;
    }
  </style>
</section>


<section class="max-w-7xl mx-auto px-6 py-20 bg-white">
  <div class="max-w-3xl mx-auto text-center mb-16">
    <h2 class="text-4xl font-extrabold mb-6 text-gray-900">Mon parcours</h2>
    <p class="text-gray-600 text-lg md:text-xl">
      Découvrez mon cheminement professionnel, mes expériences clés et mes acquis.
    </p>
  </div>

  <div class="relative max-w-4xl mx-auto" id="timeline-container">
    <!-- Ligne verticale -->
    <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 bg-gray-300 transform -translate-x-1/2">
      <div id="timeline-line" class="absolute top-0 left-0 w-full bg-[#17e5f3]" style="height: 0%; transition: height 0.3s ease-out;"></div>
      <div id="timeline-dot" class="absolute left-1/2 w-5 h-5 rounded-full bg-[#17e5f3] transform -translate-x-1/2" style="top: 0; transition: top 0.3s ease-out;"></div>
    </div>

    <div class="space-y-10 sm:space-y-12 md:space-y-16 relative z-10">
     @php
$journeys = [
  [
    'date' => '2024 à aujourd\'hui',
    'title' => "Maintien de l'Excellence et Prospective",
    'description' => "<strong>Veille Technologique Stratégique :</strong> Engagement constant dans la veille pour intégrer les outils et
    technologies les plus récents.<br><br>
    <strong>Croissance Continue :</strong> Investissement continu dans la formation pour garantir des solutions de
    pointe. Préparation et lancement de nouveaux projets ambitieux.",
    'side' => 'left'
  ],

  [
    'date' => '2022 - 2023',
    'title' => "L'Autonomie, Passage au Freelance",
    'description' => "<strong>Indépendance et Diversification :</strong> Transition réussie vers le statut de Freelance, menant à bien une
    multitude de projets variés pour diverses entreprises et organisations. Développement de
    l'autonomie, de la gestion client et de la polyvalence projet.",
    'side' => 'right'
  ],

  [
    'date' => '2021 - 2022',
    'title' => 'Structuration et Reconnaissance',
    'description' => "<strong>Spécialisation Accentuée :</strong> Consolidation de l'expertise en communication digitale, avec une maîtrise
    poussée de l'infographie et du design. 
    Obtention du poste de Social Média Manager chez élit arts, mettant en pratique les compétences
    acquises.<br><br>
    <strong>Distinction :</strong> Finaliste du prestigieux concours \"Arène\" dans la catégorie Marketing Digital,
    reconnaissant mon potentiel parmi les jeunes talents numériques du Bénin.",
    'side' => 'left'
  ],

  [
    'date' => '2020 - 2021',
    'title' => 'Les fondations',
    'description' => "<strong>Début en Infopreneuriat :</strong> Lancement dans la vente de produits digitaux, maîtrise des fondamentaux
    du marketing digital et de la formation en ligne.<br><br> 
    <strong>Engagement Civique :</strong> Premiers pas dans l'activisme (DSSR avec MAJ/ABPF).<br><br> 
    <strong>Immersion Professionnelle :</strong> Stage de formation en Marketing Digital & Social Media Management
    chez l’agence de communication élit arts. Focus sur la conception stratégique, la gestion des
    campagnes publicitaires, la création de contenu engageant, l'animation communautaire et l'analyse
    de performance.",
    'side' => 'right'
  ],
];
@endphp


      @foreach ($journeys as $journey)
        <div 
          class="md:flex md:justify-between md:items-center relative timeline-item opacity-0 transition-all duration-700 ease-out"
          data-side="{{ $journey['side'] }}"
        >
          @if ($journey['side'] === 'left')
            <div class="md:w-1/2 md:pr-8 text-right md:text-left">
              <div class="timeline-card bg-white p-6 rounded-lg shadow-[0_0_15px_rgba(0,0,0,0.15)] min-h-[220px] md:min-h-[250px] mb-6 md:mb-0">
                <p class="text-[#17e5f3] font-bold mb-3">{{ $journey['date'] }}</p>
                <h3 class="text-xl font-bold mb-3">{{ $journey['title'] }}</h3>
                <p class="text-gray-600">{!! $journey['description'] !!}</p>
              </div>
            </div>
            <div class="md:w-1/2"></div>
          @else
            <div class="md:w-1/2"></div>
            <div class="md:w-1/2 md:pl-8 text-left">
              <div class="timeline-card bg-white p-6 rounded-lg shadow-[0_0_15px_rgba(0,0,0,0.15)] min-h-[220px] md:min-h-[250px] mb-6 md:mb-0">
                <p class="text-[#17e5f3] font-bold mb-3">{{ $journey['date'] }}</p>
                <h3 class="text-xl font-bold mb-3">{{ $journey['title'] }}</h3>
                <p class="text-gray-600">{!! $journey['description'] !!}</p>
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
  const container = document.getElementById('timeline-container');
  const line = document.getElementById('timeline-line');
  const dot = document.getElementById('timeline-dot');
  const items = document.querySelectorAll('.timeline-item');

  let mobileAnimated = false;   // animation jouée une fois sur mobile
  let desktopAnimated = new Set(); // set pour garder trace des cards animées sur desktop

  function updateTimeline() {
    const rect = container.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const containerTop = rect.top + scrollTop;
    const containerHeight = container.offsetHeight;
    const progress = Math.min(Math.max((scrollTop + windowHeight / 2 - containerTop) / containerHeight, 0), 1);

    if (window.innerWidth >= 768) {
      line.style.height = (progress * 100) + '%';
      const dotPosition = progress * containerHeight;
      dot.style.top = dotPosition + 'px';

      let dotVisible = false;

      items.forEach((item) => {
        const itemOffsetTop = item.offsetTop;
        const itemHeight = item.offsetHeight;
        if (dotPosition >= itemOffsetTop && dotPosition <= itemOffsetTop + itemHeight) {
          dotVisible = true;
        }
      });
      dot.style.opacity = dotVisible ? '1' : '0';

      // Animation desktop : une seule fois par card
      items.forEach((item, index) => {
        const itemRect = item.getBoundingClientRect();
        const card = item.querySelector('.timeline-card');
        const side = item.dataset.side;

        // Si card visible dans la zone
        if (itemRect.top < windowHeight * 0.8 && itemRect.bottom > windowHeight * 0.2) {
          // Si pas encore animée
          if (!desktopAnimated.has(item)) {
            setTimeout(() => {
              item.classList.remove('opacity-0');
              item.classList.add('opacity-100');
              card.classList.remove('fade-left', 'fade-right');
              void card.offsetWidth;

              if (side === 'left') {
                card.classList.add('fade-left');
              } else {
                card.classList.add('fade-right');
              }
              desktopAnimated.add(item); // marque comme animée
            }, index * 200);
          }
        }
        // Ne rien faire si card déjà animée, donc pas de reset à opacity-0
      });

    } else {
      // Mobile : animation fade une seule fois
      if (!mobileAnimated) {
        if (rect.top <= windowHeight && rect.bottom >= 0) {
          items.forEach((item, index) => {
            const card = item.querySelector('.timeline-card');
            setTimeout(() => {
              item.classList.remove('opacity-0');
              item.classList.add('opacity-100');
              card.classList.remove('fade-left', 'fade-right');
              const side = item.dataset.side;
              if (side === 'left') {
                card.classList.add('fade-left');
              } else {
                card.classList.add('fade-right');
              }
            }, index * 200);
          });
          mobileAnimated = true;
        }
      }
    }
  }

  window.addEventListener('scroll', updateTimeline);
  window.addEventListener('resize', updateTimeline);
  updateTimeline();
});
</script>

<style>
.opacity-0 {
  opacity: 0;
}
.opacity-100 {
  opacity: 1;
  transition: opacity 0.7s ease-out;
}

/* Animation fade depuis la gauche */
.fade-left {
  animation: fadeLeft 1.5s ease-out forwards;
}
@keyframes fadeLeft {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Animation fade depuis la droite */
.fade-right {
  animation: fadeRight 1.5s ease-out forwards;
}
@keyframes fadeRight {
  from {
    opacity: 0;
    transform: translateX(50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}
</style>



@endsection
