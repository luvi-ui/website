<div x-data="{ open: true }">
    <x-dropdown-menu x-model="open">
        <x-dropdown-menu.trigger variant="outline">
            Open
        </x-dropdown-menu.trigger>
        <x-dropdown-menu.content class="w-56">
            <x-dropdown-menu.label>My Account</x-dropdown-menu.label>
            <x-dropdown-menu.separator />
            <x-dropdown-menu.group>
                <x-dropdown-menu.item>
                    <x-dropdown-menu.item-label>
                        Profile
                    </x-dropdown-menu.item-label>
                    <x-dropdown-menu.shortcut>⇧⌘P</x-dropdown-menu.shortcut>
                </x-dropdown-menu.item>
                <x-dropdown-menu.item>
                    <x-dropdown-menu.item-label>
                        Prada
                    </x-dropdown-menu.item-label>
                    <x-dropdown-menu.shortcut>⇧⌘P</x-dropdown-menu.shortcut>
                </x-dropdown-menu.item>
                <x-dropdown-menu.item>
                    <x-dropdown-menu.item-label>
                        Pokemon
                    </x-dropdown-menu.item-label>
                    <x-dropdown-menu.shortcut>⇧⌘P</x-dropdown-menu.shortcut>
                </x-dropdown-menu.item>
                <x-dropdown-menu.sub>
                    <x-dropdown-menu.sub.trigger>Invite users</x-dropdown-menu.sub.trigger>
                    <x-dropdown-menu.sub.content>
                        <x-dropdown-menu.item>Email</x-dropdown-menu.item>
                        <x-dropdown-menu.item>Message</x-dropdown-menu.item>
                        <x-dropdown-menu.separator />
                        <x-dropdown-menu.item>More...</x-dropdown-menu.item>
                        <x-dropdown-menu.sub>
                            <x-dropdown-menu.sub.trigger>Invite users</x-dropdown-menu.sub.trigger>
                            <x-dropdown-menu.sub.content>
                                <x-dropdown-menu.item>Email</x-dropdown-menu.item>
                                <x-dropdown-menu.item>Message</x-dropdown-menu.item>
                                <x-dropdown-menu.separator />
                                <x-dropdown-menu.item>More...</x-dropdown-menu.item>
                            </x-dropdown-menu.sub.content>
                        </x-dropdown-menu.sub>
                    </x-dropdown-menu.sub.content>
                </x-dropdown-menu.sub>
            </x-dropdown-menu.group>
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
            <x-dropdown-menu.separator />
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
            <x-dropdown-menu.item>
                <x-dropdown-menu.item-label>Log out</x-dropdown-menu.item-label>
                <x-dropdown-menu.shortcut>⇧⌘Q</x-dropdown-menu.shortcut>
            </x-dropdown-menu.item>
        </x-dropdown-menu.content>
    </x-dropdown-menu>
</div>
