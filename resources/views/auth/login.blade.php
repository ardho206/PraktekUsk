<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tamansiswa 2</title>
    <link rel="shortcut icon" href="{{ asset('img/tamsis.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="font-poppins max-w-full h-screen bg-gray-50">
    <main class="flex justify-center items-center h-full w-full">
        <div class="bg-blue-300 w-96 h-auto rounded-lg p-4 shadow-lg shadow-gray-500/80">
            <div class="flex flex-col items-center mb-5">
                <img src="{{ asset('img/tamsis.png') }}" alt="" class="w-32 h-32">
                <h1 class="uppercase font-semibold text-xl">Tamansiswa 2 jakarta</h1>
            </div>
            <form action="{{ url('/auth/login') }}" method="post" class="space-y-4">
                @csrf
                <div class="flex flex-col">
                    <label for="email" class="ml-1">Email</label>
                    <input type="email" id="email" name="email" class="rounded-md text-sm">
                </div>
                <div class="flex flex-col">
                    <label for="password" class="ml-1">Password</label>
                    <input type="password" id="password" name="password" class="rounded-md text-sm">
                </div>
                <button type="submit" class="p-2 rounded-md bg-gray-500 text-white w-full font-semibold">LOGIN</button>
            </form>
        </div>
    </main>
</body>

</html>
