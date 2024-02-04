<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <x-layout-main>
        <x-slot:title>Prova home</x-slot>

        <x-navbar>

        </x-navbar>
    </x-layout-main>
    <h1>{{ $titoloblog }}</h1>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <ul>
        <li><a href="{{ route('articoli') }}"> Articoli </a></li>
        <li><a href="{{ route('info') }}"> Chi siamo </a></li>
    </ul>
</body>

</html>
