<x-dialog>
    <x-dialog.trigger>
        <x-button
            variant="outline"
            @click="$refs.__dialog.showModal();"
        >Share</x-button>
    </x-dialog.trigger>
    <x-dialog.content class="sm:max-w-md">

        <div class="grid gap-4">
            <x-dialog.header>
                <x-dialog.title>Share link</x-dialog.title>
                <x-dialog.description>
                    Anyone who has this link will be able to view this.
                </x-dialog.description>
            </x-dialog.header>
            <div class="flex items-center space-x-2">
                <div class="grid flex-1 gap-2">
                    <x-label
                        htmlFor="link"
                        class="sr-only"
                    >
                        link
                    </x-label>
                    <x-input
                        id="link"
                        value="https://ui.shadcn.com/docs/installation"
                        readonly
                    />
                </div>
                <x-button
                    type="submit"
                    size="sm"
                    class="px-3"
                >
                    <span class="sr-only">copy</span>
                    <x-lucide-copy class="size-4" />
                </x-button>
            </div>
            <x-dialog.footer class="sm:justify-start">
                <x-dialog.close>Close</x-dialog.close>
            </x-dialog.footer>
        </div>
    </x-dialog.content>
</x-dialog>
