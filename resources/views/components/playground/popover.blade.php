<div>

    <div wire:click="$toggle('popoverOpen')">
        change via wire:model
    </div>

    <x-popover wire:model="popoverOpen">
        <x-popover.trigger>Open</x-popover.trigger>
        <x-popover.content class="p-4">Place content for the popover here.</x-popover.content>
    </x-popover>

</div>
