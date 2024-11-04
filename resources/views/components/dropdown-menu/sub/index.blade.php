<li
    role="menuitem"
    aria-haspopup="menu"
    x-data="{ __subMenuOpen: false }"
    x-on:click="__subMenuOpen = !__subMenuOpen"
    x-id="['dropdown-menu-sub-trigger', 'dropdown-menu-sub-content']"
    {{ $attributes->twMerge([
        'focus-within:bg-accent focus-within:text-accent-foreground',
        'col-span-full grid grid-cols-subgrid',
    ]) }}
>
    {{ $slot }}
</li>
