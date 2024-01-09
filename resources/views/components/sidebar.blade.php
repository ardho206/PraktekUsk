<div class="hidden border-r bg-gray-100/40 lg:block dark:bg-gray-800/40">
    <div class="flex h-full max-h-screen flex-col gap-2">
        <div class="flex h-[60px] items-center border-b px-6">
            <a class="flex items-center gap-2 font-semibold" href="#" rel="ugc">
                <img src="{{ asset('img/tamsis.png') }}" alt="" class="w-7 h-7">
                <span class="">Tamansiswa 2</span>
            </a>
        </div>
        <div class="flex-1 overflow-auto py-2">
            <nav class="grid items-start px-4 text-sm font-medium">
                <a class="flex items-center gap-3 text-sm uppercase rounded-lg px-3 py-2 text-gray-800 transition-all hover:bg-gray-200 dark:text-gray-400 dark:hover:text-gray-50"
                    href="{{ route('dashboard.index') }}" rel="ugc">
                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M9 4.025A7.5 7.5 0 1 0 16.975 12H9V4.025Z" />
                            <path
                                d="M12.5 1c-.169 0-.334.014-.5.025V9h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 12.5 1Z" />
                        </g>
                    </svg>
                    Dashboard
                </a>
                <a class="flex items-center gap-3 text-sm uppercase rounded-lg px-3 py-2 text-gray-800 transition-all hover:bg-gray-200 dark:text-gray-400 dark:hover:text-gray-50"
                    href="#" rel="ugc">
                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 11 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1.75 15.363a4.954 4.954 0 0 0 2.638 1.574c2.345.572 4.653-.434 5.155-2.247.502-1.813-1.313-3.79-3.657-4.364-2.344-.574-4.16-2.551-3.658-4.364.502-1.813 2.81-2.818 5.155-2.246A4.97 4.97 0 0 1 10 5.264M6 17.097v1.82m0-17.5v2.138" />
                    </svg>
                    Pembayaran
                </a>
                @can('isAdmin', Auth::user())
                    <a class="flex items-center gap-3 text-sm uppercase rounded-lg px-3 py-2 text-gray-800 transition-all hover:bg-gray-200 dark:text-gray-400 dark:hover:text-gray-50"
                        href="{{ route('dashboard.user') }}" rel="ugc">
                        <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                        </svg>
                        User
                    </a>
                @endcan
                <a class="flex items-center gap-3 text-sm uppercase rounded-lg px-3 py-2 text-gray-800 transition-all hover:bg-gray-200 dark:text-gray-400 dark:hover:text-gray-50"
                    href="#" rel="ugc">
                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none"
                        viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                    </svg>
                    histori pembayaran
                </a>
            </nav>
        </div>
    </div>
</div>
