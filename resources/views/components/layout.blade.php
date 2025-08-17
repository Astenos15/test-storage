<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer | Raffy Ramos</title>

    {{-- Production: use Vite::asset to get hashed files --}}
    @production
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
        <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
    @endproduction

    {{-- Local dev: use Vite dev server --}}
    @env('local')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endenv
</head>

<body>
    @include('sweetalert::alert')

    <div class="grid grid-rows-[auto_1fr_auto] h-screen">
        <header>
            <x-nav />
        </header>

        <main>
            {{ $slot }}
        </main>

        <x-footer />
    </div>
</body>

</html>
