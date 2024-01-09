@extends('layouts.main')

@section('content')
    <x-title-pages :title="'Dashboard'" />
    <div class="grid grid-cols-3 gap-4">
        <div class="flex items-center px-5 bg-green-400 w-full h-24 rounded-md">
            <svg class="w-12 h-12 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 18 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1v14h16M4 10l3-4 4 4 5-5m0 0h-3.207M16 5v3.207" />
            </svg>
            <div class="flex-1 ms-4 text-xl text-white font-semibold">
                <h2 class="uppercase">Uang Masuk</h2>
                <p>Rp.100.000</p>
            </div>
        </div>
        <div class="flex items-center px-3 bg-red-500 w-full h-24 rounded-md">
            <svg class="w-12 h-12 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 18 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1v14h16M4 5l3 4 4-4 5 5m0 0h-3.207M16 10V6.793" />
            </svg>
            <div class="flex-1 ms-4 text-xl text-white font-semibold">
                <h2 class="uppercase">Uang Keluar</h2>
                <p>Rp.85.000</p>
            </div>
        </div>
        <div class="flex items-center px-3 bg-blue-500 w-full h-24 rounded-md">
            <svg class="w-12 h-12 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 11 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1.75 15.363a4.954 4.954 0 0 0 2.638 1.574c2.345.572 4.653-.434 5.155-2.247.502-1.813-1.313-3.79-3.657-4.364-2.344-.574-4.16-2.551-3.658-4.364.502-1.813 2.81-2.818 5.155-2.246A4.97 4.97 0 0 1 10 5.264M6 17.097v1.82m0-17.5v2.138" />
            </svg>
            <div class="flex-1 ms-4 text-xl text-white font-semibold">
                <h2 class="uppercase">total uang</h2>
                <p>Rp.85.000</p>
            </div>
        </div>
    </div>
@endsection
