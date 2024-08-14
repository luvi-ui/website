@props(['column', 'sortCol', 'sortAsc'])

<x-dropdown-menu>
    <x-dropdown-menu.trigger
        variant="ghost"
        size="sm"
        class="-ml-3 h-8"
    >
        {{ $slot }} <x-lucide-chevrons-up-down class="ml-2 size-4" />
    </x-dropdown-menu.trigger>
    <x-dropdown-menu.content>
        <x-dropdown-menu.item wire:click="sortByAsc('{{ $column }}')">
            <x-lucide-arrow-up class="mr-2 size-3.5 text-muted-foreground/70" />
            Asc
        </x-dropdown-menu.item>
        <x-dropdown-menu.item wire:click="sortByDesc('{{ $column }}')">
            <x-lucide-arrow-down class="mr-2 size-3.5 text-muted-foreground/70" />
            Desc
        </x-dropdown-menu.item>
        <x-dropdown-menu.separator />
        <x-dropdown-menu.item>
            <x-lucide-eye-off class="mr-2 size-3.5 text-muted-foreground/70" />
            Hide
        </x-dropdown-menu.item>
    </x-dropdown-menu.content>
</x-dropdown-menu>
