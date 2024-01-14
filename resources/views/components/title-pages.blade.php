@props(['title'])

<div class="flex items-center gap-4">
    <h1 class="font-semibold text-lg md:text-2xl">{{ $title }}</h1>
    @if (Request::is('user'))
        <button data-modal-target="modal-add" data-modal-toggle="modal-add"
            class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-gray-800 text-white hover:bg-primary/90 h-9 rounded-md px-3 ml-auto"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="h-4 w-4 mr-2">
                <path d="M5 12h14"></path>
                <path d="M12 5v14"></path>
            </svg>
            Add User
        </button>
    @endif
</div>
