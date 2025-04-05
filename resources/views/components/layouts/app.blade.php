<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'TemApp' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/preline@3.0.1/dist/preline.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/preline@3.0.1/src/plugins/accordion/variants.min.css" rel="stylesheet">
    @livewireStyles
</head>

<body class="bg-slate-200 dark:bg-slate-700 flex flex-col min-h-screen">
    <header class="fixed top-0 left-0 w-full bg-white dark:bg-gray-800 shadow-md z-50">
        @livewire('partials.navbar')
    </header>

    <main class="flex-grow mt-[60px]">
        {{ $slot }}
    </main>

    <footer class="mt-auto">
        @livewire('partials.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
</body>
</html>