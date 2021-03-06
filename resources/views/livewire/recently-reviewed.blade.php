<div wire:init="loadRecentlyReviewed" class="recently-reviewed-container space-y-12 mt-8">
    @forelse($recentlyReviewed as $review)
        <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
            <div class="relative flex-none">
                <a href="{{ route('games.show', $review['slug']) }}">
                    <img src="{{ $review['coverImageUrl'] }}"
                         class="w-48 hover:opacity-75 transition ease-in-out duration-150"
                         alt="game cover for {{ $review['name'] }}">
                </a>
                <div id="review_{{ $review['slug'] }}" class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full text-xs"
                     style="right:-20px;bottom:-20px;">
                </div>
            </div>
            <div class="ml-12">
                <a href="{{ route('games.show', $review['slug']) }}" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                    {{ $review['name'] }}
                </a>
                <div class="text-gray-400 mt-1">
                    {{ $review['platforms'] }},
                </div>
                <div class="text-gray-400 mt-6 hidden md:block">
                    {{ $review['summary'] }}
                </div>
            </div>
        </div>
    @empty
        @foreach(range(1, 4) as $game)
        <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
            <div class="relative flex-none">
                <div class="bg-gray-700 rounded w-32 lg:w-48 h-40 lg:h-56"></div>
            </div>
            <div class="ml-6 lg:ml-12">
                <div class="inline-block text-lg font-semibold leading-tight text-transparent bg-gray-700 rounded mt-4">Title goes here</div>
                <div class="mt-8 space-y-4 hidden lg:block">
                    <span class="text-transparent bg-gray-700 rounded inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, odio.</span>
                    <span class="text-transparent bg-gray-700 rounded inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, odio.</span>
                    <span class="text-transparent bg-gray-700 rounded inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, odio.</span>
                    <span class="text-transparent bg-gray-700 rounded inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, odio.</span>
                </div>
            </div>
        </div>
        @endforeach
    @endforelse
</div>

@push('scripts')
    @include('partials._rating', [
	    'event' => 'reviewGameWithRatingAdded'
    ])
@endpush
