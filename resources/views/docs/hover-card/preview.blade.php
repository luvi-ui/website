<x-hover-card>
    <x-hover-card.trigger>
        <x-button variant="link">livewire</x-button>
    </x-hover-card.trigger>
    <x-hover-card.content class="w-80">
        <div class="flex justify-between space-x-4">
            <x-avatar>
                <x-avatar.image src="https://github.com/livewire.png" />
                <x-avatar.fallback>lw</x-avatar.fallback>
            </x-avatar>
            <div class="space-y-1">
                <h4 class="text-sm font-semibold">livewire</h4>
                <p class="text-sm">
                    livewire - the most productive way to build your next web app
                </p>
                <div class="flex items-center pt-2">
                    <x-lucide-calendar class="mr-2 h-4 w-4 opacity-70" />
                    <span class="text-xs text-muted-foreground">
                        joined august 2019
                    </span>
                </div>
            </div>
        </div>
    </x-hover-card.content>
</x-hover-card>
