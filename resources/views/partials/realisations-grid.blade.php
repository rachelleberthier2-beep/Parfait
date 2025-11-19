@foreach ($files as $file)
    <div 
        <div 
    class="relative w-full h-full  group cursor-pointer 
           transition-transform duration-300 hover:scale-105"
    onclick="openModal('{{ $file['type'] }}', '{{ $file['url'] }}')">

        {{-- Miniature selon type --}}
        @if($file['type'] === 'image')
            
            <img src="{{ $file['url'] }}"
                 class="w-full h-full object-contain  transition duration-300 group-hover:opacity-70">
            
        @elseif($file['type'] === 'video')
            <video class="controls autoplay playsinline w-full h-60 object-cover transition duration-300 group-hover:opacity-70" muted>
                <source src="{{ $file['url'] }}" type="video/mp4">
            </video>

        @elseif($file['type'] === 'pdf')
            <div class="w-full h-full bg-gray-100 flex flex-col items-center justify-center">
                <span class="text-blue-700 text-5xl mb-3">📄</span>
               <a href="#" 
       onclick="event.stopPropagation(); openModal('pdf', {!! json_encode(asset($file['url'])) !!}); return false;"
       class="text-blue-600 underline text-sm hover:text-blue-800 mb-2">
       Voir dans le modal
    </a>

    <a href="{{ asset($file['url']) }}" target="_blank" rel="noopener noreferrer"
       class="text-blue-600 underline text-sm hover:text-blue-800">
       Ouvrir dans un nouvel onglet
    </a>

            </div>
        @endif

        {{-- Overlay --}}
        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center text-center text-black transition-opacity duration-300 px-4 pointer-events-none">
            <h3 class="text-xl font-bold mb-2">{{ $file['name'] }}</h3>
        </div>
    </div>
@endforeach



