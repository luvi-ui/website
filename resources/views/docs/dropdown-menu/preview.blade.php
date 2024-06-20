<x-dropdown-menu>
    <x-dropdown-menu.trigger variant="outline">
        Open
    </x-dropdown-menu.trigger>
    <x-dropdown-menu.content class="w-56">
        <x-dropdown-menu.label>My Account</x-dropdown-menu.label>
        <x-dropdown-menu.separator />
        <x-dropdown-menu.group>
            <x-dropdown-menu.item>
                Profile
                <x-dropdown-menu.shortcut>⇧⌘P</x-dropdown-menu.shortcut>
            </x-dropdown-menu.item>
            <x-dropdown-menu.item>
                Prada
                <x-dropdown-menu.shortcut>⇧⌘P</x-dropdown-menu.shortcut>
            </x-dropdown-menu.item>
            <x-dropdown-menu.item>
                Pokemon
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
        <x-dropdown-menu.item>
            Log out
            <x-dropdown-menu.shortcut>⇧⌘Q</x-dropdown-menu.shortcut>
        </x-dropdown-menu.item>
    </x-dropdown-menu.content>
</x-dropdown-menu>
