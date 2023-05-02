<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        @if(!empty($title))
        <title>{{ $title ?? 'Congelados' }}</title>
        @endif
        @if(!empty($description))
        <meta name="description" content="{{ $description ?? '' }}">
        @endif
        @if(!empty($keywords))
        <meta name="keywords" content="{{ $keywords ?? '' }}">
        @endif
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7de26de2f7.js" crossorigin="anonymous"></script>
        @livewireStyles
    </head>
    <body>
        @include('header')
        @stack('adicionaCarrinho')
        @stack('solicitacaoOrcamento')
        {{ $slot }}
        @include('footer')
        @livewireScripts
    </body>
</html>