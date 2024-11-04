<x-button
    ::id="$id('dropdown-menu-trigger')"
    ::popovertarget="$id('dropdown-menu-content')"
    popovertargetaction="toggle"
    ::aria-expanded="__menuOpen"
    ::aria-controls="$id('popover-trigger')"
    {{ $attributes }}
>
    {{ $slot }}
</x-button>
