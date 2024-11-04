<dialog
    popover
    :id="$id('dropdown-menu-sub-content')"
    x-anchor.right-start="document.getElementById($id('dropdown-menu-sub-trigger'))"
    x-effect="__subMenuOpen ? $el.showPopover() : $el.hidePopover()"
    x-on:beforeToggle="__subMenuOpen = $event.newState === 'open'"
    {{ $attributes->twMerge('m-0 p-1 min-w-[8rem] rounded-md border bg-popover  text-popover-foreground shadow-md') }}
>
    <ul class="grid grid-cols-[auto_1fr_auto] gap-x-2">
        {{ $slot }}
    </ul>
</dialog>
