@props([
    'align' => 'center',
    'side' => 'bottom',
    'sideOffset' => 4,
])
@php
    $alignment = $side . ['center' => '', 'end' => '-end', 'start' => '-start'][$align];
@endphp
<dialog
    popover
    :id="$id('dropdown-menu-content')"
    x-effect="__menuOpen ? $el.showPopover() : $el.hidePopover()"
    x-anchor.{{ $alignment }}.offset.{{ $sideOffset }}="document.getElementById($id('dropdown-menu-trigger'))"
    x-on:beforeToggle="__menuOpen = $event.newState === 'open'"
    {{ $attributes->twMerge('m-0 p-1 min-w-[8rem] rounded-md border bg-popover text-popover-foreground shadow-md') }}
>
    <ul class="grid grid-cols-[auto_1fr_auto] gap-x-2">
        {{ $slot }}
    </ul>
</dialog>
