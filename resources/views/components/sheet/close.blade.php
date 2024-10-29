<x-button
    x-on:click="sheetOpen = false"
    {{ $attributes->twMerge('') }}
>
    {{ $slot }}
    <span class="sr-only">Close</span>
</x-button>
