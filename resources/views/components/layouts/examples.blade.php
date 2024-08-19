@php
    $examples = [
        [
            'title' => 'Mail',
            'link' => '/examples/mail/1',
            'activeWhen' => 'examples/mail/*',
        ],
        [
            'title' => 'Cards',
            'link' => '/examples/cards',
            'activeWhen' => 'examples/cards',
        ],
        [
            'title' => 'Forms',
            'link' => '/examples/forms',
            'activeWhen' => 'examples/forms',
        ],
        [
            'title' => 'Tasks',
            'link' => '/examples/tasks',
            'activeWhen' => 'examples/tasks',
        ],
    ];
@endphp

<x-layouts.app>
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
                    <a
                        wire:navigate
                        href="/docs"
                    ><x-button>Get started</x-button></a>
                    <a
                        wire:navigate
                        href="/docs/components/accordion"
                    ><x-button variant="outline">Components</x-button></a>
                </div>
            </section>

            <section>
                <div class="relative">
                    <div
                        dir="ltr"
                        class="relative overflow-hidden max-w-[600px] lg:max-w-none"
                        style="position: relative; --radix-scroll-area-corner-width: 0px; --radix-scroll-area-corner-height: 0px;"
                    >
                        <style>
                            [data-radix-scroll-area-viewport] {
                                scrollbar-width: none;
                                -ms-overflow-style: none;
                                -webkit-overflow-scrolling: touch;
                            }

                            [data-radix-scroll-area-viewport]::-webkit-scrollbar {
                                display: none
                            }
                        </style>
                        <div
                            data-radix-scroll-area-viewport=""
                            class="h-full w-full rounded-[inherit]"
                            style="overflow: scroll;"
                        >
                            <div style="min-width: 100%; display: table;">
                                <div class="mb-4 flex items-center">
                                    <a
                                        wire:navigate
                                        class="flex h-7 items-center justify-center rounded-full px-4 text-center text-sm transition-colors hover:text-primary {{ request()->is('/') || request()->is('examples/mail/*') ? 'bg-muted font-medium text-primary' : 'text-muted-foreground' }}"
                                        href="/examples/mail/1"
                                    >Mail</a>
                                    <a
                                        wire:navigate
                                        class="flex h-7 items-center justify-center rounded-full px-4 text-center text-sm transition-colors hover:text-primary {{ request()->is('examples/cards') ? 'bg-muted font-medium text-primary' : 'text-muted-foreground' }}"
                                        href="/examples/cards"
                                    >Cards</a>
                                    <a
                                        wire:navigate
                                        class="flex h-7 items-center justify-center rounded-full px-4 text-center text-sm transition-colors hover:text-primary {{ request()->is('examples/forms') || request()->is('examples/forms/*') ? 'bg-muted font-medium text-primary' : 'text-muted-foreground' }}"
                                        href="/examples/forms"
                                    >Forms</a>
                                    <a
                                        wire:navigate
                                        class="flex h-7 items-center justify-center rounded-full px-4 text-center text-sm transition-colors hover:text-primary {{ request()->is('examples/tasks') ? 'bg-muted font-medium text-primary' : 'text-muted-foreground' }}"
                                        href="/examples/tasks"
                                    >Tasks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden rounded-[0.5rem] border bg-background shadow">
                    {{ $slot }}
                </div>
            </section>
        </div>
    </main>
</x-layouts.app>
