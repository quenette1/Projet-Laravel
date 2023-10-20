<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @if($role == "Organisateur")
          <div class="flex flex-col justify-bottom items-center space-x-1 space-y-8">
            <div class="flex item-center justify-center max-w-7xl mx-auto sm:px-6 lg:px-8 bg-grey-900" type="button">
                <x-primary-button data-modal-target="defaultModal"  data-modal-toggle="defaultModal" class="bg-white space-y-5 font-sans w-72 h-72">
                    <div class="text-xl text-black">Ajouter Article</div>
                    <div class="text-3xl text-blue-400">+</div>
                </x-primary-button>
            </div>
            <div id="defaultModal" class="hidden flex tems-center justify-center">
                @include('articles.edit')
            </div>
          </div>
        @endif
    </div>
</x-app-layout>
<script>
  const modalButtons = document.querySelectorAll("[data-modal-target]");
  const modals = document.querySelectorAll(".modal");

  modalButtons.forEach(button => {
    button.addEventListener("click", () => {
      const targetModal = document.getElementById(button.dataset.modalTarget);

      if (targetModal) {
        targetModal.classList.toggle("hidden");
      }
    });
  });
  
</script>
