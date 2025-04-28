<!DOCTYPE html>
<html lang="{{ str_replace('_','_', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <title>Blueprint CDMX - Artes Graficas de Lujo </title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body class="bg-gray-900 text-gray-100 front-sans">
        <header class="bg-gray-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold text-white">BluePrint CDMX</h1>
                <nav>
                    <ul class="flex space-x-6">
                        <li><a href="{{ route('home') }}" class="hover:text-gray-300">Inicio</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-gray-300">Servicios</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-gray-300">Nosotros</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-gray-300">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
            <div class="container mx-auto py-8">
                @yield('content')
            </div>

            <footer class="bg-gray-800 py-4 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} BluePrint CDMX. Todos los derechos reservados.</p>
            </footer>
    </body>
</html>