@props(['column', 'sortCol', 'sortAsc'])

<x-button
    wire:click="sortBy('{{ $column }}')"
    variant="ghost"
    {{ $attributes->twMerge('group') }}
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
        <div class="text-gray-400 opacity-0 group-hover:opacity-100">
            <x-lucide-arrow-up-down class="ml-2 size-4" />
        </div>
    @endif
</x-button>
