<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex item-center p-5 ">
            <li>
                <a href="/" class="p-5">Home</a>
            </li>
            <li>
                <a href="{{route('dashboard')}}" class="p-5">Dashboard</a>
            </li>
            <li>
                <a href="{{route('posts')}}" class="p-5">Posts</a>
            </li>
        </ul>
        <ul class="flex item-center p-5">
            @auth
                <li>
                    <a href="" class="p-3">{{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{route('logout')}}" method="post" class="inline p-3">
                        @csrf
                        <button type="submit">Logout</button>

                    </form>
                </li>
            @endauth
            @guest
                <li>
                    <a href="{{route('login')}}" class="p-5">Login</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="p-5">Register</a>
                </li>
            @endguest

        </ul>

    </nav>
    @yield('content')
</body>

</html>