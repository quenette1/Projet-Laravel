<div class="bg-white p-8 rounded-lg shadow-lg space-y-2">
    <h2 class="text-2xl font-semibold">Créer un nouvel article</h2>

    <form action="{{ route('articles.store') }}" calss="space-y-2" method="POST">
        @csrf

        <div class="space-y-1">
            <label for="name" class="block text-sm font-medium text-gray-700">Titre de l'évènement</label>
            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div class="space-y-1">
            <label for="description" class="block text-sm font-medium text-gray-700">Description de l'évènement</label>
            <textarea name="description" id="description" rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
        </div>

        <div class="space-y-1">
            <label for="emplacement" class="block text-sm font-medium text-gray-700">Emplacement de l'évènement</label>
            <textarea name="emplacement" id="emplacement" rows="1" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Créer l'évènement</button>
        </div>
    </form>
</div>