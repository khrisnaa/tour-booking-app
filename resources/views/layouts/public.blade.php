<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1">
        <meta name="csrf-token"
            content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com"
            rel="preconnect">
        <link href="https://fonts.gstatic.com"
            rel="preconnect"
            crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @stack('styles')
    </head>

    <body class="{{-- px-6 py-6 --}} min-h-screen bg-white font-inter text-black antialiased">
        <main class="overflow-x-hidden pb-24">
            {{ $slot }}
            <x-public.footer />
        </main>

        @if (!request()->routeIs('tour.details*'))
            <x-public.bottom-navigation />
        @endif

        @stack('scripts')
    </body>

</html>
