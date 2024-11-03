<x-button
    ::id="$id('popover-trigger')"
    x-ref="popover-trigger"
    ::popovertarget="$id('popover-content')"
    popovertargetaction="toggle"
    ::aria-expanded="__open"
    ::aria-controls="$id('popover-trigger')"
    {{ $attributes->twMerge('') }}
>
    {{ $slot }}
</x-button>
