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
                <nav class="flex gap-2 items-center">
                    <a href="/" class="text-gray-600 hover:text-gray-800 font-bold uppercase text-sm">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800 font-bold uppercase text-sm">Crear Cuenta</a>
                </nav>
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
        Devstagram - Todos los derechos reservados {{now()->year}}
    </footer>
    

</body>

</html>
