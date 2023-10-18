<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($role == "Organisateur")
                        <div id="creerArticle" style="cursor: pointer;" class="bg-grey w-1/2 h-1/2">
                            <p>Test</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function redirectToEventCreation() {
        window.location.href = "{{ url('/evenement') }}"; // Replace with the actual URL for event creation
    }
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
