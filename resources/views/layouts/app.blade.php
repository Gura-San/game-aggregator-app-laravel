<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Games</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
            <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
                <div class="flex flex-col lg:flex-row items-center">
                    <a href="/">
                        <img src="/laracasts-logo.svg" alt="laracasts" class="w-32 flex-none">
                    </a>
                    <ul class="flex ml-0 lg:ml-16 mt-6 lg:mt-0 space-x-8">
                        <li><a href="#" class="hover:text-gray-400">Games</a></li>
                        <li ><a href="#" class="hover:text-gray-400">Reviews</a></li>
                        <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                    </ul>
                </div>
                <div class="flex items-center mt-6 lg:mt-0">
                    <div class="relative">
                        <label>
                            <input type="text" class="bg-gray-800 text-sm rounded-full focus:outline-none lg:focus:shadow-outline w-64 px-3 pl-8 py-1" placeholder="Search:">
                        </label>
                        <div class="absolute top-0 flex h-full ml-2">
                            <svg class="fill-current text-gray-400 w-4" viewBox="0 0 50 50"><path d="M21 3a17 17 0 1010 31l13 13 3-3-13-13c2-3 4-7 4-11 0-9-8-17-17-17zm0 2a15 15 0 110 30 15 15 0 010-30z"/></svg>
                        </div>
                    </div>
                    <div class="ml-6">
                        <a href="#"><img src="/avatar.jpg" alt="avatar" class="rounded-full w-8"></a>
                    </div>
                </div>
            </nav>
        </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered by <a href="#" class="underline hover:text-gray-400">AGDB API</a>
        </div>
    </footer>
</body>
</html>
