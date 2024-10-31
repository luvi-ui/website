<x-sheet>
    <x-sheet.trigger>
        <x-button variant="outline">Open</x-button>
    </x-sheet.trigger>
    <x-sheet.content class="has-[[open]]:-translate-x-6 has-[[open]]:scale-[.97]">
        <x-sheet.header>
            <x-sheet.title>are you absolutely sure?</x-sheet.title>
            <x-sheet.description>
                this action cannot be undone. this will permanently delete your account
                and remove your data from our servers.
            </x-sheet.description>
        </x-sheet.header>

        <x-sheet>
            <x-sheet.trigger>
                <x-button variant="outline">Open second</x-button>
            </x-sheet.trigger>
            <x-sheet.content class="backdrop:bg-transparent shadow-2xl">
                <x-sheet.header>
                    <x-sheet.title>are you absolutely sure?</x-sheet.title>
                    <x-sheet.description>
                        this action cannot be undone. this will permanently delete your account
                        and remove your data from our servers.
                    </x-sheet.description>
                </x-sheet.header>
            </x-sheet.content>
        </x-sheet>
    </x-sheet.content>
</x-sheet>
