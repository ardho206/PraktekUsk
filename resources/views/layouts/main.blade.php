<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Tamansiswa 2 Jakarta</title>
    <link rel="shortcut icon" href="{{ asset('img/tamsis.png') }}" type="image/x-icon">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <main class="grid h-screen min-h-screen w-full lg:grid-cols-[280px_1fr]">
        <x-sidebar />

        <div class="flex flex-col">
            <x-navbar />

            <main class="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-6">
                @yield('content')
            </main>
        </div>
    </main>
</body>

</html>
