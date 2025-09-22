<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-slate-900 dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <div
        class="flex items-center h-screen justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex  flex-1 w-full flex-col-reverse">
            <div
                class="flex-1 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] rounded-md p-4 w-fit flex flex-col gap-4 m-auto">
                <h1 class="mb-1 text-5xl font-medium">whatizap.</h1>
                <p class="text-2xl">A soma é {{ isset($soma) ? $soma : '' }}</p>
                <a href="/"
                    class="bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-1 rounded-md shadow-sm transition">Home</a>
            </div>
        </main>
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>
