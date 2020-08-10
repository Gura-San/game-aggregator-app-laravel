<div wire:init="loadComingSoon" class="most-anticipated-container space-y-10 mt-8">
    @forelse($comingSoon as $soon)
        <div class="game flex">
            <a href="{{ route('games.show', $soon['slug']) }}">
                <img src="{{ $soon['coverImageUrl'] }}"
                     class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                     alt="game cover for {{ $soon['name'] }}">
            </a>
            <div class="ml-4">
                <a href="{{ route('games.show', $soon['slug']) }}">{{ $soon['name'] }}</a>
                <div class="text-gray-400 text-sm mt-1">
                    {{ $soon['releaseDate'] }}
                </div>
            </div>
        </div>
    @empty
        @foreach(range(1, 4) as $game)
            <div class="game flex">
                <div class="bg-gray-800 w-16 h-20 flex-none rounded"></div>
                <div class="ml-4">
                    <div class="text-transparent bg-gray-700 rounded leading-tight">Title goes right here</div>
                    <div class="text-transparent bg-gray-700 rounded inline-block mt-2">August 11, 2020</div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>
