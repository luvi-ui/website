<x-radio-group
    name="spacing"
    defaultValue="comfortable"
>
    <div class="flex items-center space-x-3 space-y-0">
        <x-radio-group.item
            value="default"
            id="r1"
        />
        <x-label htmlFor="r1">
            Default
        </x-label>
    </div>
    <div class="flex items-center space-x-3 space-y-0">
        <x-radio-group.item
            value="comfortable"
            id="r2"
        />
        <x-label htmlFor="r2">
            Comfortable
        </x-label>
    </div>
    <div class="flex items-center space-x-3 space-y-0">
        <x-radio-group.item
            value="compact"
            id="r3"
        />
        <x-label htmlFor="r3">
            Compact
        </x-label>
    </div>
</x-radio-group>
