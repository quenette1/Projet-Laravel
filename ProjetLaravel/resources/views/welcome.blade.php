<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="resources\css\app.css">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
        <title>Laravel</title>
        @vite('resources/css/app.css')
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <!-- Banderole en Haut -->
        <div class="flex w-screen h-28 bg-beige items-center px-4 space-x-4">
            <h1 class="flex-1 text-white text-2xl font-LaBelleAurore">Ma région danse !</h1>
            @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-gray-900 text-white dark:hover:text-grey ">Tableau de bord</a>
            <a href="{{ url('/profile') }}" class="font-semibold hover:text-gray-900 text-white">{{ auth()->user()->name }}</a>
        </div>
        <div>
            @else
                <div class="flex-1 space-x-10">
                    <a href="{{ route('login')}}" class="bg-jaune-pastis rounded-2xl p-4">Se connecter</a>
                    <a href="{{ route('register')}}" class="bg-jaune-pastis rounded-2xl p-4">S'incrire</a>
                </div>
            @endauth
        </div>
        <div class="flex flex-line justify-center items-center space-x-8 pt-8">
            @foreach($articles as $article)
                <div class="flex flex -wrap flex-col bg-gray-300 justify-left p-4 border-4 border-gray-300 hover:border-blue-600 w-28 rounded-xl">
                    <div class="bg-grey text-2xl font-bold">
                        {{$article->name}}
                    </div>
                    <div>
                        {{$article->description}}
                    </div>
                    <div class="text-blue-700">
                        {{$article->emplacement}}
                    </div>
                    <x-secondary-button href="{{route('articles.destroy',['article',$article])}}" class="flex justify-left items-left ">
                        <div class="">Del</div>
                    </x-secondary-button>
                </div>
            @endforeach
        </div>
        
    </body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap');
</style>

