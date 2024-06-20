@php
    $sidebarNavItems = [
        [
            'title' => 'Profile',
            'href' => 'examples/forms',
        ],
        [
            'title' => 'Account',
            'href' => 'examples/forms/account',
        ],
        [
            'title' => 'Appearance',
            'href' => 'examples/forms/appearance',
        ],
        [
            'title' => 'Notifications',
            'href' => 'examples/forms/notifications',
        ],
    ];
@endphp

<x-layouts.examples>
    <div class="hidden space-y-6 p-10 pb-16 md:block">
        <div class="space-y-0.5">
            <h2 class="text-2xl font-bold tracking-tight">Settings</h2>
            <p class="text-muted-foreground">
                Manage your account settings and set e-mail preferences.
            </p>
        </div>
        <x-separator class="my-6" />
        <div class="flex flex-col space-y-8 lg:flex-row lg:space-x-12 lg:space-y-0">
            <aside class="-mx-4 lg:w-1/5">
                <nav class="flex space-x-2 lg:flex-col lg:space-x-0 lg:space-y-1">
                    @foreach ($sidebarNavItems as $item)
                        <a
                            wire:navigate
                            key="{{ $item['href'] }}"
                            href="{{ url($item['href']) }}"
                            @class([
                                'inline-flex items-center justify-start whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2',
                                'bg-muted hover:bg-muted' => request()->is($item['href']),
                                'hover:bg-transparent hover:underline' => !request()->is($item['href']),
                            ])
                        >
                            {{ $item['title'] }}
                        </a>
                    @endforeach
                </nav>
            </aside>
            <div class="flex-1 lg:max-w-2xl">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layouts.examples>
