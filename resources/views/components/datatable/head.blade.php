@props([
    'column' => '',
    'hideable' => false,
    'sortCol' => null,
    'sortAsc' => null,
])
@php
    $sortable = !is_null($sortCol) && !is_null($sortAsc);
@endphp
@if (!$hideable || $this->isVisible($column))
<x-table.head>
    @if($hideable || $sortable)
    <x-dropdown-menu>
        <x-dropdown-menu.trigger
            variant="ghost"
            size="sm"
            class="-ml-3 h-8"
        >
            {{ $slot }}
            @if ($sortCol === $column)
                <div class="text-gray-400">
                    @if ($sortAsc)
                        <x-lucide-arrow-up class="ml-2 size-4" />
                    @else
                        <x-lucide-arrow-down class="ml-2 size-4" />
                    @endif
                </div>
            @else
                <x-lucide-chevrons-up-down class="ml-2 size-4" />
            @endif
        </x-dropdown-menu.trigger>
        <x-dropdown-menu.content>
            @if($sortable)
            <x-dropdown-menu.item wire:click="sortByAsc('{{ $column }}')">
                <x-lucide-arrow-up class="mr-2 size-3.5 text-muted-foreground/70" />
                {{__('Asc') }}
            </x-dropdown-menu.item>
            <x-dropdown-menu.item wire:click="sortByDesc('{{ $column }}')">
                <x-lucide-arrow-down class="mr-2 size-3.5 text-muted-foreground/70" />
                {{ __('Desc') }}
            </x-dropdown-menu.item>
            @endif
            @if($hideable && $sortable)
            <x-dropdown-menu.separator />
            @endif
            @if($hideable)
            <x-dropdown-menu.item wire:click="toggleVisibility('{{ $column }}')">
                <x-lucide-eye-off class="mr-2 size-3.5 text-muted-foreground/70" />
                {{ __('Hide') }}
            </x-dropdown-menu.item>
            @endif
        </x-dropdown-menu.content>
    </x-dropdown-menu>
    @else
     {{ $slot }}
    @endif
</x-table.head>
@endif
