<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>{{ $title ?? 'Congelados' }}</title>
        <meta name="description" content="{{ $description ?? '' }}">
        <meta name="keywords" content="{{ $keywords ?? '' }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&family=Sono&display=swap" rel="stylesheet">
        @vite(['resources/scss/app.scss'])
        @stack('scss')
    </head>
    <body>
        @include('header')
        {{ $slot }}
        @include('footer')
        @vite(['resources/js/app.js'])
    </body>
</html>