<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jordan Travel Hub</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-yellow-800">
    
<nav class="p-6 bg-yellow-900 flex justify-between items-center relative z-20">
    <div class="flex items-center space-x-4">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/69/Flag_and_map_of_Jordan.svg" alt="Jordan logo"
            class="h-12" />
        <h1 class="text-sm text-yellow-600 md:uppercase">Jordan Travel Hub</h1>
    </div>
    <button id="menu-button" class="hover md:hidden text-yellow-600 text-white rounded relative">
        <svg class="w-6 h-6 text-gray-800 text-yellow-600 hover:bg-yellow-800 z-50" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
        </svg>
    </button>

    <div id="menu-container"
        class="absolute top-full right-0 md:relative md:flex md:items-center md:space-x-5 hidden md:mt-0 bg-yellow-900 rounded p-4 z-10">
        <ul id="menu" class="text-yellow-600 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-5">
            <li class="hover:bg-yellow-800">
                <a href="/" class="p-2">Home</a>
            </li>
            <li class="hover:bg-yellow-800">
                <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
            </li>
            <li class="hover:bg-yellow-800">
                <a href="{{ route('posts.store') }}" class="p-3">Posts</a>
            </li>

            @auth
                <li class="hover:bg-yellow-800">
                    <a href="" class="p-2">{{ auth()->user()->name }}</a>
                </li>
                <li class="hover:bg-yellow-800">
                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                        <button type="submit" class="p-3">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li class="hover:bg-yellow-800">
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>
                <li class="hover:bg-yellow-800">
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>


    <script>
        document.getElementById('menu-button').addEventListener('click', function () {
            var menu = document.getElementById('menu-container');
            menu.classList.toggle('hidden');
        });
    </script>
    


    @yield('content')
</body>

</html>