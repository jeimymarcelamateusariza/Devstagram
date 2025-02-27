<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Devstagram</title>
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="text-3xl font-black text-gray-800">Devstagram</a>
                </div>

                @auth
                    <nav class="flex gap-2 items-center">
                        <a href="{{route('post.create')}}" class="flex items-center gap-2 bg-white border p-2 rounded text-sm uppercase font-bold cursor-pointer">
                            <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M149.1 64.8L138.7 96 64 96C28.7 96 0 124.7 0 160L0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64l-74.7 0L362.9 64.8C356.4 45.2 338.1 32 317.4 32L194.6 32c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" /></svg>
                            Crear
                        </a>
                        <a href="/" class="text-gray-600 hover:text-gray-800 font-bold text-sm">Hola: <span class="font-normal ">{{ auth()->user()->username}}</span></a>
                        <form action="{{ route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-gray-800 font-bold uppercase text-sm">Cerrar sesion</button>
                        </form>
                    </nav>
                @endauth
                @guest
                    <nav class="flex gap-2 items-center">
                        <a href="{{ route('login')}}" class="text-gray-600 hover:text-gray-800 font-bold uppercase text-sm">Login</a>
                        <a href="{{ route('register') }}"
                            class="text-gray-600 hover:text-gray-800 font-bold uppercase text-sm">Crear Cuenta</a>
                    </nav>
                @endguest


            </div>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="text-center font-black text-3xl mb-10">
            @yield('titulo')
        </h2>

        @yield('contenido')

    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        Devstagram - Todos los derechos reservados {{ now()->year }}
    </footer>


</body>

</html>
