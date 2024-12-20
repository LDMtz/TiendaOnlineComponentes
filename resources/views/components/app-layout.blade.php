<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belikekis Components - Tienda Online</title>
    @vite('resources/css/app.css')
    @vite('resources/css/custom_styles.css')
    @vite('resources/js/header-scripts.js')
</head>
<body class="bg-cm-gray-1 min-h-screen flex flex-col">
    <x-header />

    <main class="flex-grow">
        {{$slot}}
    </main>

    <x-footer />
    @stack('scripts')
</body>
</html>
