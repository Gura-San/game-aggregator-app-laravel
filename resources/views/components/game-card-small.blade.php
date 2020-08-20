<div class="game flex">
    <a href="{{ route('games.show', $game['slug']) }}">
        <img src="{{ $game['coverImageUrl'] }}"
             class="w-16 hover:opacity-75 transition ease-in-out duration-150"
             alt="game cover for {{ $game['name'] }}">
    </a>
    <div class="ml-4">
        <a href="{{ route('games.show', $game['slug']) }}">{{ $game['name'] }}</a>
        <div class="text-gray-400 text-sm mt-1">
            {{ $game['releaseDate'] }}
        </div>
    </div>
</div>
