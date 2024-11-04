@props([
    'disabled' => false,
])
<button
    :id="$id('dropdown-menu-sub-trigger')"
    :popovertarget="$id('dropdown-menu-sub-content')"
    popovertargetaction="toggle"
    aria-haspopup="true"
    aria-disabled="{{ $disabled ? 'true' : 'false' }}"
    tabindex="-1"
    {{ $attributes->except(['x-on:click', '@click', 'wire:click'])->twMerge([
            'hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground',
            'col-span-full grid grid-cols-subgrid cursor-default select-none items-center',
            'rounded-sm px-2 py-1.5 text-sm outline-none transition-colors',
            'opacity-50 cursor-not-allowed' => $disabled,
        ]) }}
>
    <div class="col-start-2 text-left">
        {{ $slot }}
    </div>
    <x-lucide-chevron-right class="ml-auto size-4" />
</button>
