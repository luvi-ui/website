@props([
    'disabled' => false,
])

<li
    role="menuitem"
    aria-disabled="{{ $disabled ? 'true' : 'false' }}"
    x-dropdown-menu:item
    tabindex="-1"
    {{ $attributes->when($disabled, function ($attributes) {
            return $attributes->except(['x-on:click', '@click', 'wire:click']);
        })->twMerge([
            'hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground',
            'col-span-full grid grid-cols-subgrid items-center',
            'cursor-default select-none',
            'rounded-sm px-2 py-1.5 text-sm outline-none transition-colors',
            'opacity-50 cursor-not-allowed' => $disabled,
        ]) }}
>
    @if (str($slot)->contains('<'))
        {{ $slot }}
    @else
        <x-dropdown-menu.item-label>{{ $slot }}</x-dropdown-menu.item-label>
    @endif
</li>
