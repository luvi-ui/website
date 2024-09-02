<x-sheet>
    <x-sheet.trigger>
        <x-button variant="outline">Open</x-button>
    </x-sheet.trigger>
    <x-sheet.content class="w-[400px] sm:w-[540px]"> {{-- [tl! highlight] --}}
        <x-sheet.header>
            <x-sheet.title>are you absolutely sure?</x-sheet.title>
            <x-sheet.description>
                this action cannot be undone. this will permanently delete your account
                and remove your data from our servers.
            </x-sheet.description>
        </x-sheet.header>
    </x-sheet.content>
</x-sheet>
