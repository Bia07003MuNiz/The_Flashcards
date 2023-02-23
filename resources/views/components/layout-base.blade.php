<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'SisCongelado' }}</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @stack('scss')

</head>
<body>

    <div class="container">
        @include('navbar')
        {{ $slot }}
    </div>


    
</body>
</html>