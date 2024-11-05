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
    :id="$id('popover-content')"
    x-effect="__open ? $el.showPopover() : $el.hidePopover()"
    x-anchor.{{ $alignment }}.offset.{{ $sideOffset }}="document.getElementById($id('popover-trigger'))"
    x-on:toggle="__open = $event.newState === 'open'"
    {{ $attributes->twMerge('m-0 overflow-hidden rounded-md border bg-popover text-popover-foreground shadow-md') }}
>
    {{ $slot }}
</dialog>
