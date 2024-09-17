@php
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Str;

    $directory = resource_path('views/pages/docs/components');
    $components = collect(File::files($directory))->map(function ($component) {
        $component = Str::of($component->getFileName())->before('.');

        return (object) [
            'name' => (string) $component,
            'label' => (string) $component->replace('-', ' ')->title(),
        ];
    });

    $livewireDirectory = resource_path('views/pages/docs/livewire-components');
    $livewireComponents = collect(File::files($livewireDirectory))->map(function ($component) {
        $component = Str::of($component->getFileName())->before('.');

        return (object) [
            'name' => (string) $component,
            'label' => (string) $component->replace('-', ' ')->title(),
        ];
    });

    $current = Str::of(request()->path())->afterLast('/');
@endphp

<div class="space-y-2 sticky top-[50px] lg:top-[100px] h-[calc(100dvh-3rem)] lg:h-[calc(100dvh-7rem)]">
    <div class="relative overflow-hidden h-full">
        <div class="h-full overflow-y-scroll space-y-4">
            <div>
                <h4 class="mb-1 rounded-md px-2 py-1 text-sm font-semibold">Getting Started</h4>
                <ul class="grid grid-flow-row auto-rows-max text-sm">
                    <li @class([
                        'group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline',
                        'text-foreground' => request()->is('docs'),
                        'text-muted-foreground' => !request()->is('docs'),
                    ])>
                        <a
                            href="/docs"
                            wire:navigate
                        >Introduction</a>
                    </li>
                    <li @class([
                        'group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline',
                        'text-foreground' => request()->is('docs/installation'),
                        'text-muted-foreground' => !request()->is('docs/installation'),
                    ])>
                        <a
                            href="/docs/installation"
                            wire:navigate
                        >Installation</a>
                    </li>
                    <li @class([
                        'group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline',
                        'text-foreground' => request()->is('docs/typography'),
                        'text-muted-foreground' => !request()->is('docs/typography'),
                    ])>
                        <a
                            href="/docs/typography"
                            wire:navigate
                        >Typography</a>
                    </li>
                    <li @class([
                        'group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline',
                        'text-foreground' => request()->is('docs/theming'),
                        'text-muted-foreground' => !request()->is('docs/theming'),
                    ])>
                        <a
                            href="/docs/theming"
                            wire:navigate
                        >Theming</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="mb-1 rounded-md px-2 py-1 text-sm font-semibold">Components</h4>
                <ul class="grid grid-flow-row auto-rows-max text-sm">
                    @foreach ($components as $component)
                        <li @class([
                            'group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline',
                            'text-foreground' => $current->value() === $component->name,
                            'text-muted-foreground' => $current->value() !== $component->name,
                        ])>
                            <a
                                href="/docs/components/{{ $component->name }}"
                                wire:navigate
                            >
                                {{ $component->label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h4 class="mb-1 rounded-md px-2 py-1 text-sm font-semibold">Livewire Components</h4>
                <ul class="grid grid-flow-row auto-rows-max text-sm">
                    @foreach ($livewireComponents as $livewireComponent)
                        <li @class([
                            'group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline',
                            'text-foreground' => $current->value() === $livewireComponent->name,
                            'text-muted-foreground' => $current->value() !== $livewireComponent->name,
                        ])>
                            <a
                                href="/docs/livewire-components/{{ $livewireComponent->name }}"
                                wire:navigate
                            >
                                {{ $livewireComponent->label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
