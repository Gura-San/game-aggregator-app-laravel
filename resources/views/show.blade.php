@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="{{ asset('/ff7.jpg') }}" alt="cover">
            </div>
            <div class="lg:ml-12 lg:mr-64 ">
                <h2 class="font-semibold text-4xl leading-tight mt-1 ">Final Fantasy VII Remake</h2>
                <div class="text-gray-400">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>Square Enix</span>
                    &middot;
                    <span>Playstation 4</span>
                </div>

                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs">Members<br>Score</div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">92%</div>
                        </div>
                        <div class="ml-4 text-xs">Critic<br>Score</div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 lg:mt-0 lg:ml-12">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">a</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">a</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">a</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">a</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">a</a>
                        </div>
                    </div>
                </div>

                <p class="mt-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad adipisci aspernatur, culpa cum deserunt enim ex fugit, natus nesciunt numquam possimus qui quibusdam quisquam tempora temporibus vero voluptatem? Tempora.</p>

                <div class="mt-12">
                    <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-800 rounded transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 142 142">
                            <path d="M142 69A71 71 0 100 74a71 71 0 00142-5zm-30 41a56 56 0 01-43 17 56 56 0 1143-17z"/>
                            <path d="M95 67L63 44c-3-2-8 0-8 5v45c0 4 5 6 8 4l32-23c2-2 2-6 0-8z"/>
                        </svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div> {{-- end game details --}}

        <div class="images-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Screenshots</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                <div>
                    <a href="#">
                        <img src="{{ asset('/ff7.jpg') }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('/ff7.jpg') }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('/ff7.jpg') }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('/ff7.jpg') }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('/ff7.jpg') }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('/ff7.jpg') }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>
        </div> {{-- end images container --}}

        <div class="similar-games-container border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
            <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="right:-20px;bottom:-20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>

                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7
                        Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="right:-20px;bottom:-20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>

                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="right:-20px;bottom:-20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>

                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="right:-20px;bottom:-20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>

                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="right:-20px;bottom:-20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>

                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="right:-20px;bottom:-20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>

                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
            </div>
        </div> {{-- end similar games container --}}
    </div>
@endsection
