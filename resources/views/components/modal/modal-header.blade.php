<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
        {{ $slot }}
    </h3>
    <x-modal.modal-close-btn :modalId="$modalId" />
</div>
