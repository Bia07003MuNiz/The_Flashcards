<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&family=Sono&display=swap" rel="stylesheet">

    <title>{{ $title ?? 'Congelados' }}</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @stack('scss')
</head>
<body>
    @include('header')
    {{ $slot }}
    @include('footer')
</body>
</html>