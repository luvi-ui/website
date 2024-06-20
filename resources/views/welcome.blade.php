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

    <!-- Styles -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="antialiased ">
    <x-local.site-header />
    <main>
        <div class="container relative">
            <section
                class="mx-auto flex max-w-[980px] flex-col items-center gap-2 py-8 md:py-12 md:pb-8 lg:py-24 lg:pb-20"
            >
                <h1 class="text-center text-3xl font-bold leading-tight tracking-tight md:text-5xl lg:leading-[1.1]">
                    Build your component library
                </h1>
                <span
                    class="max-w-[750px] text-center text-lg font-light text-foreground"
                    style="display: inline-block; vertical-align: top; text-decoration: inherit; max-width: 520px;"
                >
                    Beautifully designed components that you can copy and paste into your apps. Accessible.
                    Customizable.
                    Open Source.
                </span>
                <div class="flex w-full items-center justify-center space-x-4 py-4 md:pb-10">
                    <x-button>Get started</x-button>
                    <x-button variant="outline">Components</x-button>
                </div>
            </section>

        </div>
    </main>
    @livewireScripts
    @stack('scripts')
</body>

</html>
