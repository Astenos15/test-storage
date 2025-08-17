<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer | Raffy Ramos</title>
    @production
        <link rel="stylesheet" href="build/assets/app-kNP4s03a.css">
    @endproduction
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

    @production
        <script src="build/assets/app-DtCVKgHt.js"></script>
    @endproduction

</body>

</html>
