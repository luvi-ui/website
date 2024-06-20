<x-dropdown-menu>
    <x-dropdown-menu.trigger variant="outline">
        Open
    </x-dropdown-menu.trigger>
    <x-dropdown-menu.content class="w-56">
        <x-dropdown-menu.label>Appearance</x-dropdown-menu.label>
        <x-dropdown-menu.separator />
        <x-dropdown-menu.checkboxitem value="statusbar">
            Status Bar
        </x-dropdown-menu.checkboxitem>
        <x-dropdown-menu.checkboxitem
            disabled
            value="activitybar"
        >
            Activity Bar
        </x-dropdown-menu.checkboxitem>
        <x-dropdown-menu.checkboxitem value="panel">
            Panel
        </x-dropdown-menu.checkboxitem>
    </x-dropdown-menu.content>
</x-dropdown-menu>
