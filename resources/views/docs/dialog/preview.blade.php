<x-dialog>
    <x-dialog.trigger>
        <x-button
            variant="outline"
            id="dialog-toggle"
            @click="$refs.__dialog.showModal();"
        >
            Edit Profile
        </x-button>
    </x-dialog.trigger>
    <x-dialog.content class="sm:max-w-[425px]">
        <div class="grid gap-4">
            <x-dialog.header>
                <x-dialog.title>
                    Edit profile
                </x-dialog.title>
                <x-dialog.description>
                    Make changes to your profile here. Click save when you're done.
                </x-dialog.description>
            </x-dialog.header>
            <div class="grid gap-4 py-4">
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-label
                        htmlfor="name"
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
                        htmlfor="username"
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
            <x-dialog.footer>
                <x-button type="submit">Save changes</x-button>
            </x-dialog.footer>
        </div>
    </x-dialog.content>
</x-dialog>