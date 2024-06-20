<x-menubar>
    <x-menubar.menu>
        <x-menubar.trigger>file</x-menubar.trigger>
        <x-menubar.content>
            <x-menubar.item>
                new tab <x-menubar.shortcut>⌘t</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.item>
                new window <x-menubar.shortcut>⌘n</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.item disabled>new incognito window</x-menubar.item>
            <x-menubar.separator />
            <x-menubar.sub>
                <x-menubar.sub.trigger>share</x-menubar.sub.trigger>
                <x-menubar.sub.content>
                    <x-menubar.item>email link</x-menubar.item>
                    <x-menubar.item>messages</x-menubar.item>
                    <x-menubar.item>notes</x-menubar.item>
                </x-menubar.sub.content>
            </x-menubar.sub>
            <x-menubar.separator />
            <x-menubar.item>
                print... <x-menubar.shortcut>⌘p</x-menubar.shortcut>
            </x-menubar.item>
        </x-menubar.content>
    </x-menubar.menu>
    <x-menubar.menu>
        <x-menubar.trigger>edit</x-menubar.trigger>
        <x-menubar.content>
            <x-menubar.item>
                undo <x-menubar.shortcut>⌘z</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.item>
                redo <x-menubar.shortcut>⇧⌘z</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.separator />
            <x-menubar.sub>
                <x-menubar.sub.trigger>find</x-menubar.sub.trigger>
                <x-menubar.sub.content>
                    <x-menubar.item>search the web</x-menubar.item>
                    <x-menubar.separator />
                    <x-menubar.item>find...</x-menubar.item>
                    <x-menubar.item>find next</x-menubar.item>
                    <x-menubar.item>find previous</x-menubar.item>
                </x-menubar.sub.content>
            </x-menubar.sub>
            <x-menubar.separator />
            <x-menubar.item>cut</x-menubar.item>
            <x-menubar.item>copy</x-menubar.item>
            <x-menubar.item>paste</x-menubar.item>
        </x-menubar.content>
    </x-menubar.menu>
    <x-menubar.menu>
        <x-menubar.trigger>view</x-menubar.trigger>
        <x-menubar.content>
            <x-menubar.checkboxitem>always show bookmarks bar</x-menubar.checkboxitem>
            <x-menubar.checkboxitem checked>
                always show full urls
            </x-menubar.checkboxitem>
            <x-menubar.separator />
            <x-menubar.item inset>
                reload <x-menubar.shortcut>⌘r</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.item
                disabled
                inset
            >
                force reload <x-menubar.shortcut>⇧⌘r</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.separator />
            <x-menubar.item inset>toggle fullscreen</x-menubar.item>
            <x-menubar.separator />
            <x-menubar.item inset>hide sidebar</x-menubar.item>
        </x-menubar.content>
    </x-menubar.menu>
    <x-menubar.menu>
        <x-menubar.trigger>profiles</x-menubar.trigger>
        <x-menubar.content>
            <x-menubar.radioitemgroup value="benoit">
                <x-menubar.radioitem value="andy">andy</x-menubar.radioitem>
                <x-menubar.radioitem value="benoit">benoit</x-menubar.radioitem>
                <x-menubar.radioitem value="luis">luis</x-menubar.radioitem>
            </x-menubar.radioitemgroup>
            <x-menubar.separator />
            <x-menubar.item inset>edit...</x-menubar.item>
            <x-menubar.separator />
            <x-menubar.item inset>add profile...</x-menubar.item>
        </x-menubar.content>
    </x-menubar.menu>
</x-menubar>
