<x-accordion
    type="single"
    collapsible
    class="w-full"
>
    <x-accordion.item value="item-1">
        <x-accordion.trigger>is it accessible?</x-accordion.trigger>
        <x-accordion.content>
            yes. it adheres to the wai-aria design pattern.
        </x-accordion.content>
    </x-accordion.item>
    <x-accordion.item value="item-2">
        <x-accordion.trigger>is it styled?</x-accordion.trigger>
        <x-accordion.content>
            yes. it comes with default styles that matches the other
            components' aesthetic.
        </x-accordion.content>
    </x-accordion.item>
    <x-accordion.item value="item-3">
        <x-accordion.trigger>is it animated?</x-accordion.trigger>
        <x-accordion.content>
            yes. it's animated by default, but you can disable it if you prefer.
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
