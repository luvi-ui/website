@props([
    'disabled' => false,
])
<li
    role="menuitemcheckbox"
    aria-disabled="{{ $disabled ? 'true' : 'false' }}"
    x-dropdown-menu:checkboxitem
    aria-label="{{ $slot }}"
    tabindex="-1"
    {{ $attributes->when($disabled, function ($attributes) {
            return $attributes->except(['x-model', 'wire:model']);
        })->twMerge([
            'hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground',
            'col-span-full grid grid-cols-subgrid items-center cursor-default select-none',
            'rounded-sm px-2 py-1.5 text-sm outline-none transition-colors',
            'opacity-50 cursor-not-allowed' => $disabled,
        ]) }}
>
    <span class="w-4 h-4">
        <x-lucide-check x-show="__isChecked" />
    </span>
    <x-dropdown-menu.item-label>{{ $slot }}</x-dropdown-menu.item-label>
</li>
