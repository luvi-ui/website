<x-card>
    <x-card.header>
        <x-card.title>share this document</x-card.title>
        <x-card.description>
            anyone with the link can view this document.
        </x-card.description>
    </x-card.header>
    <x-card.content>
        <div class="flex space-x-2">
            <x-input
                value="http://example.com/link/to/document"
                readonly
            />
            <x-button
                variant="secondary"
                class="shrink-0"
            >
                copy link
            </x-button>
        </div>
        <hr class="my-4" />
        <div class="space-y-4">
            <h4 class="text-sm font-medium">people with access</h4>
            <div class="grid gap-6">
                <div class="flex items-center justify-between space-x-4">
                    <div class="flex items-center space-x-4">
                        <x-avatar>
                            <x-avatar.image src="https://unavatar.io/gravatar/acme@gmail.com" />
                            <x-avatar.fallback>OM</x-avatar.fallback>
                        </x-avatar>
                        <div>
                            <p class="text-sm font-medium leading-none">
                                olivia martin
                            </p>
                            <p class="text-sm text-muted-foreground">m@example.com</p>
                        </div>
                    </div>
                    <x-select class="!ml-auto !w-[110px]">
                        <option value="edit">can edit</option>
                        <option value="view">can view</option>
                    </x-select>
                </div>
                <div class="flex items-center justify-between space-x-4">
                    <div class="flex items-center space-x-4">
                        <x-avatar>
                            <x-avatar.image src="https://unavatar.io/gravatar/acme@gmail.com" />
                            <x-avatar.fallback>OM</x-avatar.fallback>
                        </x-avatar>
                        <div>
                            <p class="text-sm font-medium leading-none">
                                isabella nguyen
                            </p>
                            <p class="text-sm text-muted-foreground">b@example.com</p>
                        </div>
                    </div>
                    <x-select class="!ml-auto !w-[110px]">
                        <option value="edit">can edit</option>
                        <option value="view">can view</option>
                    </x-select>
                </div>
                <div class="flex items-center justify-between space-x-4">
                    <div class="flex items-center space-x-4">
                        <x-avatar>
                            <x-avatar.image src="https://unavatar.io/gravatar/acme@gmail.com" />
                            <x-avatar.fallback>OM</x-avatar.fallback>
                        </x-avatar>
                        <div>
                            <p class="text-sm font-medium leading-none">
                                sofia davis
                            </p>
                            <p class="text-sm text-muted-foreground">p@example.com</p>
                        </div>
                    </div>
                    <x-select class="!ml-auto !w-[110px]">
                        <option value="edit">can edit</option>
                        <option value="view">can view</option>
                    </x-select>
                </div>
            </div>
        </div>
    </x-card.content>
</x-card>
