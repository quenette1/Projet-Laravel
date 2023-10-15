<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="resources\css\app.css">
        <title>Laravel</title>
        @vite('resources/css/app.css')
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <!-- Banderole en Haut -->
        <div class="flex w-screen h-28 bg-beige items-center px-4">
            <h1 class="flex-1 text-white text-2xl">Ma région danse !</h1>
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            
            @else
                <div calss="flex-1 space-x-10">
                    <a href="{{ route('login')}}" class="bg-jaune-pastis rounded-2xl p-4">Se connecter</a>
                    <a href="{{ route('register')}}" class="bg-jaune-pastis rounded-2xl p-4">S'incrire</a>
                </div>
            @endauth
            
            
        </div>
    </body>
</html>

