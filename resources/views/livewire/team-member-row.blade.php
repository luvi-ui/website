<div class="flex items-center justify-between space-x-4">
    <div class="flex items-center space-x-4">
        <x-avatar>
            <x-avatar.image src="{{ $member->avatar }}" />
            <x-avatar.fallback>{{ $member->initials }}</x-avatar.fallback>
        </x-avatar>
        <div>
            <p class="text-sm font-medium leading-none">{{ $member->name }}</p>
            <p class="text-sm text-muted-foreground">{{ $member->email }}</p>
        </div>
    </div>
    <x-popover>
        <x-popover.trigger asChild>
            <x-button
                variant="outline"
                class="ml-auto"
            >
                {{ ucfirst($member->role) }}
                <x-lucide-chevron-down class="ml-2 h-4 w-4 text-muted-foreground" />
            </x-button>
        </x-popover.trigger>
        <x-popover.content
            class="!p-0"
            align="end"
        >
            <form
                x-form
                wire:submit="update"
                class="space-y-4 p-1"
            >
                <x-radio-group
                    name="role"
                    wire:model="role"
                >
                    <div
                        x-form:item
                        class="hover:bg-gray-100 px-4 py-2"
                    >
                        <x-form.label class="flex items-center gap-x-3">
                            <x-radio-group.item
                                x-form:control
                                value="developer"
                            />
                            <div>
                                <p>Developer</p>
                                <p class="text-sm text-muted-foreground">Can view, comment and comment.</p>
                            </div>
                        </x-form.label>
                    </div>
                    <div
                        x-form:item
                        class="hover:bg-gray-100 px-4 py-2"
                    >
                        <x-form.label class="flex items-center gap-x-3">
                            <x-radio-group.item
                                x-form:control
                                value="viewer"
                            />
                            <div>
                                <p>Viewer</p>
                                <p class="text-sm text-muted-foreground">Can view and comment.</p>
                            </div>
                        </x-form.label>
                    </div>
                    <div
                        x-form:item
                        class="hover:bg-gray-100 px-4 py-2"
                    >
                        <x-form.label class="flex items-center gap-x-3">
                            <x-radio-group.item
                                x-form:control
                                value="billing"
                            />
                            <div>
                                <p>Billing</p>
                                <p class="text-sm text-muted-foreground">Can view, comment and manage billing.</p>
                            </div>
                        </x-form.label>
                    </div>

                    <div
                        x-form:item
                        class="hover:bg-gray-100 px-4 py-2"
                    >
                        <x-form.label class="flex items-center gap-x-3">
                            <x-radio-group.item
                                x-form:control
                                value="owner"
                            />
                            <div>
                                <p>Owner</p>
                                <p class="text-sm text-muted-foreground">Admin-level access to all resources.</p>
                            </div>
                        </x-form.label>
                    </div>
                </x-radio-group>
                <div class="flex justify-end">
                    <x-button
                        type="submit"
                        class="!w-full"
                    >Speichern</x-button>
                </div>
            </form>
        </x-popover.content>
    </x-popover>
</div>
