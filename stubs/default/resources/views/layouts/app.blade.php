<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased bg-gray-100">
<x-jet-banner />

<div class="lg:flex flex-col lg:flex-row lg:min-h-screen w-full">
    <!-- Sidebar -->
    <x-jet-bar-sidebar />
    <!-- End Sidebar -->

    <div class="w-full">

        <x-navigation-menu />

        <!-- Content Container -->
        <main class="flex-1 relative z-0 overflow-y-auto py-6 focus:outline-none" tabindex="0" x-init="$el.focus()">
            @if (isset($header))
                <div class="max-w-7xl mx-auto pt-3 px-4 sm:px-6 lg:px-8">
                    <!-- Title -->
                    <h1 class="text-lg font-semibold tracking-widest text-gray-900 uppercase dark-mode:text-white">{{ $header }}</h1>
                    <!-- End Title -->
                </div>
            @endif
            <div>
                <div class="lg:min-h-96 px-4 sm:px-0">
                    {{ $slot }}
                </div>
            </div>
        </main>
        <!-- Content Container -->

    </div>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
