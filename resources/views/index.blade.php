@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
            Popular Games
        </h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            @foreach($popularGames as $game)
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}"
                             alt="game cover for {{ $game['name'] }}"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    @if(isset($game['rating']))
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right:-20px;bottom:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ round($game['rating']).'%' }}
                        </div>
                    </div>
                    @endif
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    {{ $game['name'] }}
                </a>
                <div class="text-gray-400 mt-1">
                    @foreach($game['platforms'] as $platform)
                        @if(array_key_exists('abbreviation', $platform))
                        {{ $platform['abbreviation'] }},
                        @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div> <!-- end popular games -->

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                @foreach($recentlyReviewed as $review)
                <div class="recently-reviewed-container space-y-12 mt-8">
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
                </div>
                @endforeach
            </div>
            <div class="most-anticipated  lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                @foreach($mostAnticipated as $anticipated)
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ Str::replaceFirst('thumb', 'cover_small', $anticipated['cover']['url']) }}"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                                 alt="game cover for {{ $anticipated['name'] }}">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">{{ $anticipated['name'] }}</a>
                            <div class="text-gray-400 text-sm mt-1">
                                {{ Carbon\Carbon::parse($anticipated['first_release_date'])->format('M d, Y') }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">Coming Soon</h2>
                @foreach($comingSoon as $soon)
                    <div class="most-anticipated-container space-y-10 mt-8">
                        <div class="game flex">
                            <a href="#">
                                <img src="{{ Str::replaceFirst('thumb', 'cover_small', $soon['cover']['url']) }}"
                                     class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                                     alt="game cover for {{ $soon['name'] }}">
                            </a>
                            <div class="ml-4">
                                <a href="#" class="hover:text-gray-300">{{ $soon['name'] }}</a>
                                <div class="text-gray-400 text-sm mt-1">
                                    {{ Carbon\Carbon::parse($soon['first_release_date'])->format('M d, Y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> <!-- end container -->

@endsection
