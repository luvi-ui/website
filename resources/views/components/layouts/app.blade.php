<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>Luvi UI</title>

    <!-- Fonts -->
    <link
        rel="preconnect"
        href="https://rsms.me"
    >
    <link
        rel="stylesheet"
        href="https://rsms.me/inter/inter.css"
    >

    <script
        defer
        src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.js"
    ></script>

    <!-- Styles -->
    @vite(['resources/css/luvi-ui.css', 'resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased">
    <x-local.site-header />
    <div>
        {{ $slot }}
    </div>
    @livewireScripts
</body>

<x-local.site-footer />

</html>
