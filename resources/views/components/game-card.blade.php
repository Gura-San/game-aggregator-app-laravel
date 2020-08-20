<div class="game mt-8">
    <div class="relative inline-block">
        <a href="{{ route('games.show', $game['slug']) }}">
            <img src="{{ $game['coverImageUrl'] }}" alt="{{ $game['name'] }} cover"
                 class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
             style="right:-20px;bottom:-20px;">
            <div id='{{ $game['slug'] }}' class="font-semibold text-xs flex justify-center items-center h-full relative">
                @push('scripts')
                    @include('partials._rating', [
                        'slug'      => $game['slug'],
                        'rating'    => $game['rating'],
                        'event'     => NULL
                    ])
                @endpush
            </div>
        </div>
    </div>
    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
        {{ $game['name'] }}
    </a>
    <div class="text-gray-400 mt-1">
        {{ $game['platforms'] }}
    </div>
</div>
