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
                    <div class="max-w-sm mx-auto bg-white border border-gray-300 p-4 rounded-md shadow-lg" onclick='redirectToEventCreation()'>
                        <div class="text-center text-5xl mb-4">
                            <span class="text-blue-500">+</span>
                        </div>
                        <div class="text-center text-xl font-semibold mb-4">
                            Créer un événement
                        </div>
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
</script>
