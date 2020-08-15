@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
        <div class="flex-none">
            <img src="{{ $game['coverImageUrl'] }}" alt="{{ $game['name'] }} cover">
        </div>
        <div class="lg:ml-12 lg:mr-64 ">
            <h2 class="font-semibold text-4xl leading-tight mt-1 ">{{ $game['name'] }}</h2>
            <div class="text-gray-400">
                <span>
                    {{ $game['genres'] }}
                </span>
                    &middot;
                <span>
                    {{ $game['companies'] }}
                </span>
                    &middot;
                <span>
                    {{ $game['platforms'] }},
                </span>
            </div>

            <div class="flex flex-wrap items-center mt-8">
                <div class="flex items-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ $game['memberRating'] }}
                        </div>
                    </div>
                    <div class="ml-4 text-xs">Members<br>Score</div>
                </div>
                <div class="flex items-center ml-12">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ $game['criticRating'] }}
                        </div>
                    </div>
                    <div class="ml-4 text-xs">Critic<br>Score</div>
                </div>
                <div class="flex items-center space-x-4 mt-4 lg:mt-0 lg:ml-12">
                    @if($game['social']['website'])
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="{{ $game['social']['website']['url'] }}" target="_blank" class="hover:text-gray-400">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 128 128">
                                <defs/>
                                <defs/>
                                <path d="M68 98c-3-2-8 1-10 5-1 4 1 7 4 8a9 9 0 006 0c5-2 4-7 2-11a6 6 0 00-2-2zM99 64a20 20 0 00-4 0 36 36 0 00-10 3l-5 3-6 2a5 5 0 00-2 3c0 2 1 4 3 5l8 4c2 2 4 4 7 3 2 0 4-2 5-3a65 65 0 006-5l6-7a5 5 0 00-2-6 9 9 0 00-6-2z" class="cls-1"/>
                                <path d="M126 63v-1-1-1-1A62 62 0 0070 2a51 51 0 00-4 0 66 66 0 00-3 0h-1-1-1A62 62 0 002 58a58 58 0 000 7v4a26 26 0 000 2v1a62 62 0 003 13l1 1v1a20 20 0 000 1 62 62 0 0030 32 39 39 0 002 1 62 62 0 0026 5h3a62 62 0 0059-59v-1-2-1zm-62 55h-1l-1-1-1-1-2-1a24 24 0 01-5-5c-3-5-3-10 0-14l7-9a32 32 0 006-10 11 11 0 00-2-10c-3-4-7-5-11-6l-2-1a32 32 0 00-3 0 77 77 0 00-12 0c-3 1-7 2-10 0l-9-4a32 32 0 00-7-1 54 54 0 0165-44c0 4 4 7 2 11-3 6-10 8-13 13a7 7 0 000 8 55 55 0 013 6l5 7c8 4 8-9 14-10 2-1 4 1 5 3 2 3 3 5 7 6a22 22 0 006 0l12-3a54 54 0 01-53 66z" class="cls-1"/>
                            </svg>
                        </a>
                    </div>
                    @endif
                    @if($game['social']['facebook'])
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="{{ $game['social']['facebook']['url'] }}" target="_blank" class="hover:text-gray-400">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 10 20">
                                <defs/>
                                <path d="M6.82 20v-9h2.73L10 7H6.82V5.05C6.82 4.02 6.85 3 8.3 3h1.45V.14C9.74.1 8.5 0 7.23 0c-2.65 0-4.3 1.66-4.3 4.7V7H0v4h2.92v9h3.9z"/>
                            </svg>
                        </a>
                    </div>
                    @endif
                    @if($game['social']['twitter'])
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="{{ $game['social']['twitter']['url'] }}" target="_blank" class="hover:text-gray-400">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 16">
                                <defs/>
                                <path d="M6.29 16A11.5 11.5 0 0017.97 4.5c0-.17 0-.34-.02-.52.8-.57 1.5-1.28 2.05-2.09-.75.33-1.54.54-2.36.64.86-.5 1.5-1.3 1.8-2.24-.8.47-1.68.8-2.6.98a4.15 4.15 0 00-5.8-.17 4 4 0 00-1.2 3.86C6.56 4.79 3.49 3.26 1.4.74a4 4 0 001.27 5.39c-.65-.02-1.29-.2-1.86-.5v.05a4.06 4.06 0 003.3 3.96c-.61.16-1.25.18-1.86.06a4.1 4.1 0 003.83 2.81A8.32 8.32 0 010 14.2a11.75 11.75 0 006.29 1.8"/>
                            </svg>
                        </a>
                    </div>
                    @endif
                    @if($game['social']['instagram'])
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="{{ $game['social']['instagram']['url'] }}" target="_blank" class="hover:text-gray-400">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 512 512">
                                <defs/>
                                <path d="M256 49.5c67.3 0 75.2.3 101.8 1.5 24.6 1.1 37.9 5.2 46.8 8.7a78.2 78.2 0 0129 18.8 77 77 0 0118.8 29 140 140 0 018.7 46.8c1.2 26.6 1.5 34.5 1.5 101.8s-.3 75.2-1.5 101.8a137.5 137.5 0 01-8.7 46.8 78.2 78.2 0 01-18.8 29 77 77 0 01-29 18.8 140 140 0 01-46.8 8.7c-26.6 1.2-34.5 1.5-101.8 1.5s-75.2-.3-101.8-1.5a137.5 137.5 0 01-46.8-8.7 78.2 78.2 0 01-29-18.8 77 77 0 01-18.8-29 140 140 0 01-8.7-46.8c-1.2-26.6-1.5-34.5-1.5-101.8s.3-75.2 1.5-101.8c1.1-24.6 5.2-37.9 8.7-46.8a78.2 78.2 0 0118.8-29 77 77 0 0129-18.8 140 140 0 0146.8-8.7A1656 1656 0 01256 49.5m0-45.4c-68.4 0-77 .3-103.9 1.5A184.6 184.6 0 0091 17.3a122.8 122.8 0 00-44.6 29.1A125 125 0 0017.3 91c-6.2 16-10.5 34.3-11.7 61.2A1815 1815 0 004.1 256c0 68.4.3 77 1.5 103.9 1.2 26.8 5.5 45.1 11.7 61.2a122.8 122.8 0 0029.1 44.6A125 125 0 0091 494.8c16 6.2 34.3 10.5 61.2 11.7 26.9 1.2 35.4 1.5 103.9 1.5s77-.3 103.9-1.5c26.8-1.2 45.1-5.5 61.2-11.7a122.8 122.8 0 0044.6-29.1 125 125 0 0029.1-44.6c6.2-16 10.5-34.3 11.7-61.2 1.2-26.9 1.5-35.4 1.5-103.9s-.3-77-1.5-103.9a185.9 185.9 0 00-11.7-61.2 122.8 122.8 0 00-29.1-44.6 125 125 0 00-44.6-29.1C405.2 11 386.9 6.7 360 5.5c-27-1.1-35.6-1.4-104-1.4z"/>
                                <path d="M256 126.6a129.4 129.4 0 100 258.8 129.4 129.4 0 000-258.8zm0 213.4a84 84 0 110-168 84 84 0 010 168z"/>
                                <circle cx="390.5" cy="121.5" r="30.2"/>
                            </svg>
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <p class="mt-12">
                {{ $game['summary'] }}
            </p>

            <div class="mt-12">
{{--                    <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-800 rounded transition ease-in-out duration-150">
                    <svg class="w-6 fill-current" viewBox="0 0 142 142">
                        <path d="M142 69A71 71 0 100 74a71 71 0 00142-5zm-30 41a56 56 0 01-43 17 56 56 0 1143-17z"/>
                        <path d="M95 67L63 44c-3-2-8 0-8 5v45c0 4 5 6 8 4l32-23c2-2 2-6 0-8z"/>
                    </svg>
                    <span class="ml-2">Play Trailer</span>
                </button>--}}
                @if(isset($game['gameTrailer']))
                <a href="{{ $game['gameTrailer'] }}" target="_blank" class="inline-flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-800 rounded transition ease-in-out duration-150">
                    <svg class="w-6 fill-current" viewBox="0 0 142 142">
                        <path d="M142 69A71 71 0 100 74a71 71 0 00142-5zm-30 41a56 56 0 01-43 17 56 56 0 1143-17z"/>
                        <path d="M95 67L63 44c-3-2-8 0-8 5v45c0 4 5 6 8 4l32-23c2-2 2-6 0-8z"/>
                    </svg>
                    <span class="ml-2">Play Trailer</span>
                </a>
                @endif
            </div>
        </div>
    </div> {{-- end game details --}}

    <div class="images-container border-b border-gray-800 pb-12 mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Screenshots</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
        @foreach($game['screenshots'] as $screenshot)
        <div>
            <a href="{{ $screenshot['huge'] }}">
                <img src="{{ $screenshot['big'] }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>
        </div>
        @endforeach
        </div>
    </div> {{-- end images container --}}

    <div class="similar-games-container border-gray-800 pb-12 mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">
            @foreach($game['similarGames'] as $similarGame)
                <x-game-card :game="$similarGame" />
            @endforeach
    </div> {{-- end similar games container --}}
</div>
@endsection
