<x-card>
    <x-card.header class="pb-3">
        <x-card.title>notifications</x-card.title>
        <x-card.description>
            choose what you want to be notified about.
        </x-card.description>
    </x-card.header>

    <x-card.content
        x-data="{ noise: 'everything' }"
        class="grid gap-4"
    >
        <x-radio-group
            name="notifications"
            x-model="noise"
            class="!block"
        >
            <div>
                <x-radio-group.item
                    value="everything"
                    id="everything"
                    class="sr-only peer"
                />
                <label
                    for="everything"
                    class="flex items-start p-2 -mx-2 space-x-4 transition-all rounded-md peer-checked:bg-accent hover:bg-accent hover:text-accent-foreground"
                >
                    <x-lucide-bell class="w-5 h-5 mt-px" />
                    <div class="space-y-1">
                        <p class="text-sm font-medium leading-none">everything</p>
                        <p class="text-sm text-muted-foreground">
                            email digest, mentions & all activity.
                        </p>
                    </div>
                </label>
            </div>
            <div>
                <x-radio-group.item
                    value="available"
                    id="available"
                    class="sr-only peer"
                />
                <label
                    for="available"
                    class="flex items-start p-2 -mx-2 space-x-4 transition-all rounded-md peer-checked:bg-accent hover:bg-accent hover:text-accent-foreground"
                >
                    <x-lucide-user-2 class="w-5 h-5 mt-px" />
                    <div class="space-y-1">
                        <p class="text-sm font-medium leading-none">available</p>
                        <p class="text-sm text-muted-foreground">
                            only mentions and comments.
                        </p>
                    </div>
                </label>
            </div>
            <div>
                <x-radio-group.item
                    value="ignoring"
                    id="ignoring"
                    class="sr-only peer"
                />
                <label
                    for="ignoring"
                    class="flex items-start p-2 -mx-2 space-x-4 transition-all rounded-md peer-checked:bg-accent hover:bg-accent hover:text-accent-foreground"
                >
                    <x-lucide-eye-off class="w-5 h-5 mt-px" />
                    <div class="space-y-1">
                        <p class="text-sm font-medium leading-none">ignoring</p>
                        <p class="text-sm text-muted-foreground">
                            email digest, mentions & all activity.
                        </p>
                    </div>
                </label>
            </div>
        </x-radio-group>
    </x-card.content>
</x-card>
