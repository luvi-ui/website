<x-dropdown-menu>
    <x-dropdown-menu.trigger variant="outline">
        Open
    </x-dropdown-menu.trigger>
    <x-dropdown-menu.content class="w-56">
        <x-dropdown-menu.label>Panel Position</x-dropdown-menu.label>
        <x-dropdown-menu.separator />
        <x-dropdown-menu.radioitemgroup default-value="bottom">
            <x-dropdown-menu.radioitem value="top">
                Top
            </x-dropdown-menu.radioitem>
            <x-dropdown-menu.radioitem value="bottom">
                Bottom
            </x-dropdown-menu.radioitem>
            <x-dropdown-menu.radioitem value="right">
                Right
            </x-dropdown-menu.radioitem>
        </x-dropdown-menu.radioitemgroup>
    </x-dropdown-menu.content>
</x-dropdown-menu>
