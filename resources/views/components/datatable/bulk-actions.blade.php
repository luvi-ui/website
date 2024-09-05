<div
    x-show="$wire.selectedTaskIds.length > 0"
    x-cloak
>
    <div class="flex items-center space-x-4">
        <x-typography.muted>
            <span x-text="$wire.selectedTaskIds.length"></span>
            {{ __('selected') }}
        </x-typography.muted>
        {{ $slot }}
    </div>
</div>
