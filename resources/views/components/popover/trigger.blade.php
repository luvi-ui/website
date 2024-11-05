<x-button
    ::id="$id('popover-trigger')"
    x-on:click="__open = ! __open"
    ::aria-expanded="__open"
    ::aria-controls="$id('popover-content')"
    {{ $attributes->twMerge('') }}
>
    {{ $slot }}
</x-button>
