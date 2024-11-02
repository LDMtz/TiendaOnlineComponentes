<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belikekis Components - Tienda Online</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-cm-gray-1">
    <x-header />

    {{$slot}}

    <x-footer />
</body>
</html>