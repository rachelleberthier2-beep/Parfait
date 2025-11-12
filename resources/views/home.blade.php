@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    {{-- SECTION 1 : Hero --}}
    <section class="max-w-8xl mx-auto px-8 py-20 bg-gray-50  mt-20">
  <div class="flex flex-col md:flex-row items-center md:space-x-16 max-w-6xl mx-auto ">
    <div class="flex-1 w-full max-w-full md:max-w-6xl px-4 md:px-0 text-left text-justify mx-auto">
  <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight mb-6 text-gray-900">
    Votre partenaire de <span class="text-[#17e5f3]">communication créatif</span> au Bénin pour des projets uniques et impactants
  </h1>
  <p class="text-gray-600 text-base sm:text-lg md:text-xl mb-2 leading-relaxed">
    Basé au Bénin, je mets ma passion et mes compétences à votre service pour vous aider à atteindre vos objectifs.
  </p>
  <p class="text-gray-600 text-base sm:text-lg md:text-xl leading-relaxed mb-6">
    Des réalisations visuelles inspirantes, un accompagnement sur-mesure, et un engagement total pour vos projets.
  </p>

  <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
    <a href="{{ route('realisations') }}" class="inline-block w-max text-black px-6 py-3 rounded-lg shadow-xl  bg-[#17e5f3]">
      Mes réalisations
    </a>
    <a href="{{ route('contact') }}" class="inline-block w-max text-black px-6 py-3 rounded-lg shadow-xl  bg-white">
      Me contacter
    </a>
  </div>
</div>

    <div class="flex-1 mt-10 md:mt-0 ms-5  w-100  md:w-250 relative md:h-150">
      <div class="absolute inset-0 bg-blue-300 rounded-lg opacity-10 -translate-x-2 -translate-y-0 rotate-10 scale-y-100"></div>
      <img src="{{ asset('images/tools/Moi 6.jpg') }}" alt="Profile" class="rounded-2xl shadow-xl w-250 h-100 object-cover md:object-cover  md:w-150 md:h-150 relative z-10">
    </div>

  </div>
</section>



<section class="relative max-w-8xl mx-auto">
    <!-- Image de fond -->
    <img src="{{ asset('images/tools/fond.jpeg') }}" alt="fond" class="w-full block">

    <!-- Zone des images -->
    <div class="zone-panneau absolute top-1/4 left-[17%] w-[67%] h-1/2 overflow-hidden">
        <!-- Images -->
        <img src="{{ asset('images/tools/Logo original noir.png') }}" alt="Image 1">
        <img src="{{ asset('images/tools/Facture et Devis.jpg') }}" alt="Image 2">
        <img src="{{ asset('images/tools/Goodies Clients.jpg') }}" alt="Image 3">
        <img src="{{ asset('images/tools/Guide Application.jpg') }}" alt="Image 4">
        <img src="{{ asset('images/tools/Identite Visuelle.jpg') }}" alt="Image 5">
        <img src="{{ asset('images/tools/Packaging.jpg') }}" alt="Image 6">
        <img src="{{ asset('images/tools/Presence Digitale.jpg') }}" alt="Image 7">
        <img src="{{ asset('images/tools/Signaletique.jpg') }}" alt="Image 8">
        <img src="{{ asset('images/tools/Stand Exposition.jpg') }}" alt="Image 9">
        <img src="{{ asset('images/tools/Supports Marketing.jpg') }}" alt="Image 10">
        <img src="{{ asset('images/tools/Vehicule agence.jpg') }}" alt="Image 11">
        <img src="{{ asset('images/tools/Vetements Corporatifs.jpg') }}" alt="Image 12">

        <!-- Texte central -->
        <div class="texte-panneau font-bold text-black text-[3vw] absolute top-[14%] left-[15%] text-center whitespace-nowrap">
            Votre partenaire de <br>communication créatif <br> au Bénin
        </div>
    </div>
</section>




    {{-- SECTION 2 : Services --}}
 <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-4xl font-extrabold mb-6 text-gray-900">Mes services</h2>
        <p class="text-gray-600 text-lg md:text-xl max-w-2xl mx-auto mb-16">
            Découvrez les services que je propose pour accompagner votre marque, de la stratégie digitale à la création visuelle.
        </p>

        {{-- Grille de services --}}
        <div class="grid md:grid-cols-3 gap-10">
            @php
                $services = [
                    [
                        'id' => 'service1',
                        'icon' => '<i class="fas fa-users-cog text-[#17e5f3] text-3xl"></i>',
                        'title' => 'Community Management',
                        'description' => 'Gestion et animation de vos réseaux sociaux pour renforcer votre image et votre visibilité en ligne.',
                        'modal_content' => "<p>&ldquo; Plus qu'un communicant, vous méritez un socio-anthropologue qui écoute vos communautés pour construire des messages qui
         résonnent vraiment. Publier du contenu ne suffit plus pour animer efficacement vos réseaux sociaux. 
         Pour véritablement capter l’attention de votre audience et bâtir une communauté engagée, il faut une stratégie de communication innovante et une créativité sans limite. 
         C’est là que j’interviens ! &rdquo;</p>
         <ul>Mes atouts :

      <li><strong>Créativité sur Mesure :</strong>Chaque contenu est conçu pour raconter une histoire qui résonne avec votre audience et reflète l’essence de votre marque.</li>

<li><strong>Techniques de Communication Avancées :</strong>Nous utilisons les dernières techniques de communication et marketing digital pour optimiser l’engagement et encourager linteraction.</li>

<li><strong>Animation Dynamique :</strong> Des publications soigneusement planifiées, mais aussi des réponses rapides et personnalisées aux commentaires et messages, pour créer des liens forts avec votre audience.</li>

<li><strong>Adaptation aux Tendances :</strong>Nous restons à laffût des tendances et adaptons nos stratégies pour rester toujours pertinents et innovants.</li> </ul>

       <p> Ne laissez pas vos réseaux sociaux stagner avec des publications fades et sans impact.
        Confiez-moi leur animation pour transformer vos plateformes en de véritables moteurs de croissance pour votre entreprise. 
        Je fais bien plus que publier du contenu : je crée une expérience engageante qui capte l'attention, génère de l'intérêt et 
        convertit votre audience en clients fidèles.
        Si Vous êtes prêt à passer au niveau supérieur, contactez-moi dès maintenant pour découvrir comment mon expertise peut faire la différence.
</p>",
                    ],
                    [
                        'id' => 'service2',
                        'icon' => '<i class="fas fa-image text-[#17e5f3] text-3xl"></i>',
                        'title' => 'Création Visuelle',
                        'description' => 'Conception graphique de visuels attractifs et cohérents pour votre communication digitale et print.',
                        'modal_content' => "<p>&ldquo;  Captez l'attention, engagez votre audience et renforcez votre image de marque grâce à des designs uniques et percutants.
            Je suis votre partenaire créatif pour tous vos projets visuels : affiches, bannières, publications pour les réseaux sociaux... 
            Nous pouvons créer ensemble, des designs qui ne sont pas seulement beaux, mais qui racontent votre histoire et atteignent vos objectifs. &rdquo;</p>

      <ul>Pourquoi choisir mes services ? 

         <li><strong>Créativité & originalité :</strong>Chaque création est unique et adaptée à votre identité. </li>

         <li><strong>Qualité professionnelle : </strong>Des designs soignés pour refléter le meilleur de votre marque. </li>

         <li><strong> Réactivité :</strong> Un service rapide et efficace, respectant vos délais. </li>

         <li><strong> Écoute attentive :</strong>Une compréhension approfondie de vos besoins pour des résultats parfaitement alignés avec vos attentes.</li>
      </ul>

      <p>Contactez-moi dès aujourd'hui pour discuter de votre projet et obtenir un devis personnalisé.<br>

                    Vous méritez ce qu'il y a de mieux parceque vous êtes une personne de marque ! </p>",
                    ],
                    [
                        'id' => 'service3',
                        'icon' => '<i class="fas fa-lightbulb text-[#17e5f3] text-3xl"></i>',
                        'title' => 'Stratégie de Communication',
                        'description' => 'Définition et déploiement de stratégies marketing pour maximiser votre impact auprès de votre audience cible.',
                        'modal_content' => "<p>
         &ldquo; Cessez de communiquer au hasard. Je vous aide à construire une feuille de route pour rendre votre message plus clair, 
         plus cohérent et plus percutant. Élaborons une stratégie pour créer une véritable connexion avec les audiences qui 
         comptent pour vous. &rdquo; </p>

      <ul>Ce que j’offre :

        <li><strong>Analyse Personnalisée :</strong>Étude approfondie de votre marché et de vos concurrents pour définir des opportunités uniques.</li>
        <li><strong>Plan d’Action Stratégique :  </strong>Élaboration d’une feuille de route claire avec des objectifs précis et des étapes concrètes. </li>
        <li><strong>Optimisation Multi-Canal :</strong>Stratégies adaptées à vos besoins sur les plateformes pertinentes (SEO, réseaux sociaux, publicité en ligne).</li>
        <li><strong>Suivi et Ajustements :</strong>Mesure des performances et ajustements continus pour maximiser les résultats.</li>
      </ul>

      <p> Pourquoi travailler avec moi ? Parce que je combine créativité et analyse approfondie de la culture des communautés 
       pour concevoir des stratégies qui vous démarquent et génèrent des résultats tangibles. Je vous aide à transformer vos défis en opportunités 
       et à atteindre vos objectifs avec succès.
       Contactez-moi dès maintenant pour une consultation gratuite !.
      </p>",
                    ],
                    [
                        'id' => 'service4',
                        'icon' => '<i class="fas fa-pen-nib text-[#17e5f3] text-3xl"></i>',
                        'title' => 'Création de Logo',
                        'description' => 'Conception de logos uniques et mémorables qui reflètent les valeurs et la personnalité de votre marque.',
                        'modal_content' => "<p>
           &ldquo;  Votre logo n'est pas qu'un dessin, c'est le visage de votre marque et la promesse de vos valeurs. 
           Chaque marque a une âme. Mon rôle est de la traduire en un logo et une identité visuelle qui parlent d'elle-même. 
           Avec passion et précision, je façonne pour vous une image de marque authentique, conçue pour inspirer la confiance et 
           traverser les années. 
          Que votre histoire commence ou qu'elle cherche un nouveau souffle, je suis là pour la rendre inoubliable. &rdquo;</p>
                            

      <ul> Ce que j’offre : 

        <li><strong>Designs distinctifs :</strong> Designs distinctifs :
             Un logo sur mesure qui capture l’essence de votre entreprise et vous différencie instantanément de la concurrence.
        </li>
        <li><strong>Identité Visuelle Complète :</strong> 
             Au-delà du logo, nous définissons une palette de couleurs, des typographies et des éléments graphiques qui garantissent une présence de marque forte et 
             cohérente sur tous vos supports (web, print, réseaux sociaux).
        </li>
        <li><strong> Approche Stratégique et Collaborative :</strong>      
             Chaque projet commence par une phase d’écoute pour comprendre vos objectifs et votre public. 
             Vous êtes impliqué à chaque étape clé, de la conception des premières pistes à la finalisation du design parfait.

        </li>
        <li><strong> Kit d'Identité Prêt à l'Emploi :</strong>
             Vous recevez un pack complet de fichiers professionnels pour toutes les utilisations (vectoriel, PNG, JPEG)
             ainsi qu’un guide de marque simple pour déployer votre nouvelle identité avec confiance.

        </li>
        <li><strong>Une Fondation pour l'Avenir :</strong>         
             Nous ne créons pas un design pour aujourd’hui, mais une base visuelle solide et flexible qui pourra accompagner la croissance et
             l'évolution de votre marque pour les années à venir.
        </li>
      
      </ul>   
      ",
                    ],
                    [
                        'id' => 'service5',
                        'icon' => '<i class="fas fa-print text-[#17e5f3] text-3xl"></i>',
                        'title' => 'Impression',
                        'description' => 'Impression de supports physiques avec une qualité optimale et une finition professionnelle.',
                        'modal_content' => "<p>
          &ldquo; Donnez vie à vos créations avec une impression de qualité sur tous types de supports. &rdquo; </p>
      <ul>
         <li><strong>Flyers, cartes de visite, affiches, bâches, t-shirts, mugs , Kakémono , Signalétiques</strong> et bien plus</li>
         <li><strong>Qualité professionnelle</strong> et finitions variées</li>
         <li><strong>Livraison rapide</strong> ou retrait sur place</li>
      </ul>
      <p> Faites briller votre image partout où vous allez !</p>",
                    ],
                    [
                        'id' => 'service6',
                        'icon' => '<i class="fas fa-video text-[#17e5f3] text-3xl"></i>',
                        'title' => 'Montage Vidéo',
                        'description' => 'Montage et habillage professionnel de vos vidéos pour un rendu captivant et dynamique.',
                        'modal_content' => "<p>
          &ldquo; Transformez vos séquences brutes en vidéos percutantes !  
          Je vous propose un montage professionnel pour vos contenus YouTube, événements, vidéos promotionnelles et plus encore. &rdquo; </p>
      <ul>
         <li><strong>Effets dynamiques</strong> et transitions fluides</li>
         <li><strong>Ajout de musiques, voix-off, sous-titres</strong></li>
         <li><strong>Optimisation pour les réseaux sociaux</strong></li>
      </ul>
      <p>Faites de vos idées une réalité audiovisuelle !</p>",
                    ],
                ];
            @endphp

            @foreach($services as $service)
                <div 
                    class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer"
                    onclick="openModal('{{ $service['id'] }}')"
                >
                    <div class="transform hover:scale-110 transition-transform duration-300">
                        {!! $service['icon'] !!}
                    </div>
                    <h3 class="font-semibold text-2xl mt-5 mb-3 text-gray-800">{{ $service['title'] }}</h3>
                    
                    <p class="text-gray-600 text-lg md:text-xl">{{ $service['description'] }}</p>
                    <button 
    type="button" 
    class="mt-6 inline-block text-[#17e5f3] px-6 py-2 rounded-lg  transition"
    onclick="event.stopPropagation(); openModal('{{ $service['id'] }}')"
>
    Voir plus  <span class="ml-2">→</span>
</button>

                </div>
            @endforeach
        </div>
    </div>

    {{-- Modales --}}
   @foreach($services as $service)
<div 
  id="{{ $service['id'] }}" 
  class="fixed inset-0 flex items-center justify-center  opacity-0 pointer-events-none transition-opacity duration-300 z-50"
  onclick="closeModal('{{ $service['id'] }}')"
>
  <div 
    class="bg-white rounded-2xl p-4 sm:p-6 md:p-8 w-11/12 sm:w-3/4 md:w-2/3 lg:w-3/4 xl:w-3/5 max-h-[90vh] overflow-y-auto relative transform scale-95 transition-transform duration-300 shadow-xl space-y-4 text-justify"
    onclick="event.stopPropagation()"
  >
    <!-- Bouton de fermeture -->
    <button 
      class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 text-3xl font-bold leading-none 
             border border-gray-300 rounded px-2 py-0.5 transition-all duration-300"
      onclick="closeModal('{{ $service['id'] }}')"
      aria-label="Fermer modal"
    >
      &times;
    </button>

    <!-- Titre -->
    <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $service['title'] }}</h3>

    <!-- Barre décorative -->
    <div class="h-1 w-full bg-gradient-to-r from-[#17e5f3] to-[#17e5f3] mb-6 rounded-full"></div>


    <!-- Contenu -->
    <div class="text-gray-600 text-base sm:text-lg md:text-xl leading-relaxed mb-5">
      {!! $service['modal_content'] !!}
    </div>
  </div>
</div>
@endforeach


</section>

<script>
    function openModal(id) {
        const modal = document.getElementById(id);
        const modalBox = modal.querySelector("div");
        modal.classList.remove('opacity-0', 'pointer-events-none');
        modal.classList.add('opacity-100', 'pointer-events-auto');
        modalBox.classList.add('scale-100');
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        const modalBox = modal.querySelector("div");
        modal.classList.add('opacity-0', 'pointer-events-none');
        modal.classList.remove('opacity-100', 'pointer-events-auto');
        modalBox.classList.remove('scale-100');
    }
</script>



<section class="py-16 relative">
  <div class="max-w-7xl mx-auto px-6 text-center" data-aos="fade-left">
    <h2 class="text-4xl font-extrabold mb-12 text-gray-900">Ils me font confiance</h2>

    <!-- Bouton gauche -->
    <button 
      id="scrollLeft" 
      class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white shadow-md rounded-full p-2 hover:bg-gray-100 transition z-10"
    >
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <!-- Conteneur défilant -->
    <div id="logoContainer" class="flex space-x-6 overflow-x-auto no-scrollbar scroll-smooth py-4">
      @php
        $clients = [
          ['src' => 'images/tools/Logo ACA_version originale.png', 'alt' => 'Client ACA'],
          ['src' => 'images/tools/Logo AGS.png', 'alt' => 'Client AGS'],
          ['src' => 'images/tools/aiesec.jpeg', 'alt' => 'Client AIESEC'],
          ['src' => 'images/tools/Logo Bois Couleur 01.png', 'alt' => 'Client Bois Couleur'],
          ['src' => 'images/tools/Logo HLT_Plan de travail 1.png', 'alt' => 'Client HLT'],
          ['src' => 'images/tools/LARRED.jpg', 'alt' => 'Client LARRED'],
          ['src' => 'images/tools/Logo Leader Optique 2 - Copie.png', 'alt' => 'Client Leader Optique'],
          ['src' => 'images/tools/AFRIK EPICES LOGO.jpg', 'alt' => 'AFRIK EPICES LOGO'],
          ['src' => 'images/tools/Elit arts.png', 'alt' => 'Elit arts'],
          ['src' => 'images/tools/Wakili Subaka transparent.png', 'alt' => 'Wakili Subaka transparent'],
          ['src' => 'images/tools/Logo.jpg', 'alt' => 'Logo'],
          ['src' => 'images/tools/ONG SOLIDARITY.jpg', 'alt' => 'ONG SOLIDARITY'],
          ['src' => 'images/tools/MAJ COTONOU Logo.jpg', 'alt' => 'MAJ COTONOU Logo'],
        ];
      @endphp

      @foreach ($clients as $client)
        <div class="flex-shrink-0 w-40 h-40 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 cursor-pointer flex items-center justify-center p-4">
          <img
            src="{{ asset($client['src']) }}"
            alt="{{ $client['alt'] }}"
            class="max-h-30 max-w-full object-contain transition duration-300"
            loading="lazy"
          />
        </div>
      @endforeach
    </div>

    <!-- Bouton droit -->
    <button 
      id="scrollRight" 
      class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white shadow-md rounded-full p-2 hover:bg-gray-100 transition z-10"
    >
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </button>
  </div>
</section>

<style>
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }
  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("logoContainer");
    const btnLeft = document.getElementById("scrollLeft");
    const btnRight = document.getElementById("scrollRight");

    // --- Boutons manuels ---
    btnLeft.addEventListener("click", () => {
      container.scrollBy({ left: -300, behavior: "smooth" });
    });

    btnRight.addEventListener("click", () => {
      container.scrollBy({ left: 300, behavior: "smooth" });
    });

    // --- Défilement automatique ---
    let scrollSpeed = 1; // vitesse du défilement (px par intervalle)
    let autoScroll;

    function startAutoScroll() {
      autoScroll = setInterval(() => {
        container.scrollLeft += scrollSpeed;
        // Si on arrive à la fin, on revient au début (effet infini)
        if (container.scrollLeft + container.clientWidth >= container.scrollWidth - 1) {
          container.scrollLeft = 0;
        }
      }, 30); // vitesse de l’intervalle (plus petit = plus fluide)
    }

    function stopAutoScroll() {
      clearInterval(autoScroll);
    }

    // Lancer automatiquement au chargement
    startAutoScroll();

    // Stopper au survol (pour que l’utilisateur puisse cliquer)
    container.addEventListener("mouseenter", stopAutoScroll);
    container.addEventListener("mouseleave", startAutoScroll);
  });
</script>


@php
  $stats = [
    ['count' => 50, 'label' => 'Projets réalisés'],
    ['count' => 18, 'label' => 'Clients satisfaits'],
    ['count' => 98, 'label' => "Taux de satisfaction", 'suffix' => '%'], // 👈 on ajoute un suffixe ici
  ];
@endphp

<section id="statsSection" class="py-16 bg-white mb-12">
  <div class="max-w-7xl mx-auto px-6 py-12 text-center bg-gray-50 rounded-xl">
    <h2 class="text-3xl font-extrabold mb-12">Statistiques clés</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-12">
      @foreach ($stats as $stat)
      <div>
        <div class="inline-flex items-baseline justify-center space-x-1">
          <p 
            class="text-6xl font-extrabold counter" 
            data-target="{{ $stat['count'] }}" 
            data-suffix="{{ $stat['suffix'] ?? '+' }}" 
            style="color: #17e5f3;"
          >0</p>
        </div>
        <p class="mt-2 text-lg font-medium text-gray-700">{{ $stat['label'] }}</p>
      </div>
      @endforeach
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const counters = document.querySelectorAll('.counter');
      const section = document.getElementById('statsSection');

      // Fonction d'animation
      function animateCounters() {
        counters.forEach(counter => {
          counter.innerText = "0"; // Réinitialiser avant chaque animation
          const target = +counter.getAttribute('data-target');
          const suffix = counter.getAttribute('data-suffix') || ''; // récupère + ou %
          const updateCount = () => {
            const count = +counter.innerText.replace(/\D/g, '');
            const increment = target / 100;
            if (count < target) {
              counter.innerText = Math.ceil(count + increment) + suffix;
              setTimeout(updateCount, 20);
            } else {
              counter.innerText = target + suffix;
            }
          };
          updateCount();
        });
      }

      // Observer la visibilité de la section
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animateCounters();
          }
        });
      }, { threshold: 0.4 });

      observer.observe(section);
    });
  </script>
</section>


<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold mb-12 text-gray-900">Témoignages</h2>
    <div class="grid gap-10 md:grid-cols-2">
      
      @php
        $testimonials = [
          [
            'quote' => "Grâce à ses conseils et son accompagnement,
               nous avons gagné de nombreux clients et notre présence digitale est devenue beaucoup plus cohérente et professionnelle.",
            'name' => "Alice",
            'role' => "Entrepreneur",
            'src' => "images/tools/Femme.png",
          ],
          [
            'quote' => "Toujours à l’écoute et très créatif, Parfait Communication a aidé  notre agence à transformer son image en ligne et
               à toucher son audience de manière efficace.",
            'name' => "Heragem",
            'role' => "CEO agence de communication",
            'src' => "images/tools/Heragem.jpg",
          ],
          [
            'quote' => "Une collaboration fluide et professionnelle. 
               Les contenus créés sont créatifs, pertinents et ont vraiment amélioré notre engagement en ligne.",
            'name' => "Sophie Martin",
            'role' => "Fondatrice, CréaDesign",
            'avatar' => "https://randomuser.me/api/portraits/women/65.jpg",
          ],
          [
            'quote' => "Professionnalisme, réactivité et créativité, tout y est. Merci Parfait !",
            'name' => "Bell'Aube HOUINATO",
            'role' => "CEO Wakili Subaka et ancien Directeur Régional de Plan International",
            'src' => "images/tools/Bell'Aube.jpg",
          ],
        ];
      @endphp

      @foreach($testimonials as $t)
        <div class="bg-white p-8 rounded-lg shadow-xl flex flex-col justify-between min-h-[320px]" data-aos="fade-up">
          
          {{-- Étoiles --}}
          <div class="flex justify-center mb-6 space-x-1" style="color: #17e5f3;">
            @for ($i = 0; $i < 5; $i++)
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.963a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.39 2.462a1 1 0 00-.364 1.118l1.287 3.963c.3.922-.755 1.688-1.54 1.118L10 13.347l-3.39 2.462c-.784.57-1.838-.196-1.54-1.118l1.287-3.963a1 1 0 00-.364-1.118L3.602 9.39c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.963z" />
              </svg>
            @endfor
          </div>

          <p class="text-gray-600 text-lg md:text-xl italic mb-8 leading-relaxed">“{{ $t['quote'] }}”</p>
          
          <div class="flex items-center space-x-6">
           
            {{-- Gestion des images locales ou externes --}}
            @if(isset($t['src']))
              <img src="{{ asset($t['src']) }}" alt="{{ $t['name'] }}" class="w-16 h-16 rounded-full object-contain border-2 border-[#17e5f3]" />
            @else
              <img src="{{ $t['avatar'] }}" alt="{{ $t['name'] }}" class="w-16 h-16 rounded-full object-cover border-2 border-[#17e5f3]" />
            @endif
      
            {{-- Ligne verticale --}}
            <div class="border-l border-gray-300 h-16"></div>

            <div class="text-left">
              <p class="font-semibold text-gray-900">{{ $t['name'] }}</p>
              <p class="text-gray-600 text-lg md:text-xl">{{ $t['role'] }}</p>
            </div>
          </div>

        </div>
      @endforeach

    </div>
  </div>
</section>

@endsection
