<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        @if($role == "Organisateur")
            <div class="flex item-center justify-center max-w-7xl mx-auto sm:px-6 lg:px-8 bg-grey-900">
                <x-primary-button class="text-black bg-white space-y-5 font-sans w-72 h-72">
                    <div class="text-xl">Ajouter Article</div>
                    <div class="text-3xl text-blue-400">+</div>
                </x-premiary-button>
            </div>
        @endif
    </div>
</x-app-layout>

<script>
    document.getElementById('creerArticle').addEventListener('click', function() {
        // Utilisez JavaScript pour envoyer une requête POST vers la route '/creer-utilisateur'
        fetch('/creer-utilisateur', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}', // Assurez-vous de transmettre le jeton CSRF
            },
        })
        .then(response => response.json())
        .then(data => {
            // Faites quelque chose avec la réponse du serveur, si nécessaire
        });
    });
</script>
