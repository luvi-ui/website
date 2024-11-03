<x-popover x-model="open">
    <x-popover.trigger variant="outline">
        Open popover
    </x-popover.trigger>
    <x-popover.content
        id="foobar"
        class="p-4 w-80"
    >
        <div class="grid gap-4">
            <div class="space-y-2">
                <h4 class="font-medium leading-none">Dimensions</h4>
                <p class="text-sm text-muted-foreground">
                    Set the dimensions for the layer.
                </p>
            </div>
            <div class="grid gap-2">
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label htmlfor="width">Width</x-label>
                    <x-input
                        id="width"
                        value="100%"
                        class="col-span-2 h-8"
                    />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label htmlfor="maxwidth">Max. width</x-label>
                    <x-input
                        id="maxwidth"
                        value="300px"
                        class="col-span-2 h-8"
                    />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label htmlfor="height">Height</x-label>
                    <x-input
                        id="height"
                        value="25px"
                        class="col-span-2 h-8"
                    />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label htmlfor="maxheight">Max. height</x-label>
                    <x-input
                        id="maxheight"
                        value="none"
                        class="col-span-2 h-8"
                    />
                </div>
            </div>
        </div>
    </x-popover.content>
</x-popover>
