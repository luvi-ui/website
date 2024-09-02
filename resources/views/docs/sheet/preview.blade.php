<x-sheet>
    <x-sheet.trigger>
        <x-button variant="outline">
            Open
        </x-button>
    </x-sheet.trigger>
    <x-sheet.content>
        <x-sheet.header>
            <x-sheet.title>Edit profile</x-sheet.title>
            <x-sheet.description>
                Make changes to your profile here. Click save when you're done.
            </x-sheet.description>
        </x-sheet.header>
        <div class="grid gap-4 py-4">
            <div class="grid grid-cols-4 items-center gap-4">
                <x-label
                    htmlFor="name"
                    class="text-right"
                >
                    Name
                </x-label>
                <x-input
                    id="name"
                    value="pedro duarte"
                    class="col-span-3"
                />
            </div>
            <div class="grid grid-cols-4 items-center gap-4">
                <x-label
                    htmlFor="username"
                    class="text-right"
                >
                    Username
                </x-label>
                <x-input
                    id="username"
                    value="@peduarte"
                    class="col-span-3"
                />
            </div>
        </div>
        <x-sheet.footer>
            <x-sheet.close type="submit">
                Save changes
            </x-sheet.close>
        </x-sheet.footer>
    </x-sheet.content>
</x-sheet>
