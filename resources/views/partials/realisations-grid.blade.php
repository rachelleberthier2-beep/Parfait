@foreach ($files as $file)
    <div  
    class="break-inside-avoid mb-4 rounded overflow-hidden relative w-full group cursor-pointer 
           transition-transform duration-300 hover:scale-105"
    onclick="openModal('{{ $file['type'] }}', '{{ $file['url'] }}')">

        {{-- IMAGE --}}
        @if($file['type'] === 'image')
            <img src="{{ $file['url'] }}"
                 class="w-full h-auto object-contain transition duration-300 group-hover:opacity-70">
        
        {{-- VIDEO --}}
        @elseif($file['type'] === 'video')
            <video class="w-full h-auto object-cover transition duration-300 group-hover:opacity-70" >
                <source src="{{ $file['url'] }}" type="video/mp4">
            </video>

        {{-- PDF --}}
        @elseif($file['type'] === 'pdf')
            <div class="w-full h-auto bg-gray-100 flex flex-col items-center justify-center p-6">
                <span class="text-blue-700 text-5xl mb-3">📄</span>

                <a href="#" 
                   onclick="event.stopPropagation(); openModal('pdf', '{{ $file['url'] }}'); return false;"
                   class="text-blue-600 underline text-sm hover:text-blue-800 mb-2">
                   Voir dans le modal
                </a>

                <a href="{{ $file['url'] }}" target="_blank" 
                   class="text-blue-600 underline text-sm hover:text-blue-800">
                   Ouvrir dans un nouvel onglet
                </a>
            </div>
        @endif

        {{-- Overlay --}}
        {{-- 
<div class="absolute inset-0 opacity-0 group-hover:opacity-100 
            flex flex-col justify-center items-center text-center 
            text-black transition-opacity duration-300 px-4 pointer-events-none">
    <h3 class="text-xl font-bold mb-2">{{ $file['name'] }}</h3>
</div>
--}}

    </div>
@endforeach
