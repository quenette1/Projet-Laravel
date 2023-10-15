<section>
    <form type="submit" action="{{ route('storeEvent') }}" method="post">
        @csrf
        <div class="mb-4">
            <label for="nom" class="block text-gray-700 font-bold mb-2">Nom de l'événement :</label>
            <input type="text" id="nom" name="nom" class="form-input" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description (1000 caractères max) :</label>
            <textarea id="description" name="description" class="form-textarea" rows="4" maxlength="1000" required></textarea>
        </div>

        <div class="mb-4">
            <label for="emplacement" class="block text-gray-700 font-bold mb-2">Emplacement :</label>
            <input type="text" id="emplacement" name="emplacement" class="form-input" required>
        </div>

        <!-- Champ de l'id de l'utilisateur (caché) -->
        <input type="hidden" id="utilisateur_id" name="utilisateur_id" value="{{ Auth::id() }}">

        <div class="text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Créer l'événement</button>
        </div>
    </form>
</section>