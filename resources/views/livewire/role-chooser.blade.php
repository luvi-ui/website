<div>
    <x-popover>
        <x-popover.trigger asChild>
            <x-button
                variant="outline"
                class="ml-auto"
            >
                Owner
                <x-lucide-chevron-down class="ml-2 h-4 w-4 text-muted-foreground" />
            </x-button>
        </x-popover.trigger>
        <x-popover.content
            class="!p-0 !w-[400px]"
            align="end"
        >
            <x-command>
                <x-command.input
                    wire:model.live="search"
                    placeholder="Select new role..."
                />
                <x-command.list>
                    @if (!count($filtered))
                        <x-command.empty>No roles found.</x-command.empty>
                    @endif
                    <x-command.group>
                        @foreach ($filtered as $role)
                            <x-command.item
                                key="{{ $role['role'] }}"
                                class="teamaspace-y-1 !px-4 !py-2"
                            >
                                <div>
                                    <p>{{ $role['role'] }}</p>
                                    <p class="text-sm text-muted-foreground">
                                        {{ $role['description'] }}
                                    </p>
                                </div>
                            </x-command.item>
                        @endforeach
                    </x-command.group>
                </x-command.list>
            </x-command>
        </x-popover.content>
    </x-popover>
</div>
