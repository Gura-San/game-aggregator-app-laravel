<div wire:init="loadRecentlyReviewed" class="recently-reviewed-container space-y-12 mt-8">
    @forelse($recentlyReviewed as $review)
        <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
            <div class="relative flex-none">
                <a href="#">
                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $review['cover']['url']) }}"
                         class="w-48 hover:opacity-75 transition ease-in-out duration-150"
                         alt="game cover for {{ $review['name'] }}">
                </a>
                @if (isset($review['rating']))
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                         style="right:-20px;bottom:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ round($review['rating']).'%' }}
                        </div>
                    </div>
                @endif
            </div>
            <div class="ml-12">
                <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                    {{ $review['name'] }}
                </a>
                <div class="text-gray-400 mt-1">
                    @foreach($review['platforms'] as $reviewPlatform)
                        @if(array_key_exists('abbreviation', $reviewPlatform))
                            {{ $reviewPlatform['abbreviation'] }},
                        @endif
                    @endforeach
                </div>
                <div class="text-gray-400 mt-6 hidden md:block">
                    {{ $review['summary'] }}
                </div>
            </div>
        </div>
    @empty
        <div class="spinner mt-8"></div>
    @endforelse
</div>
