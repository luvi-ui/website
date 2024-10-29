<x-button
    x-on:click="$refs.dialog.close()"
    {{ $attributes->twMerge('') }}
>
    {{ $slot }}
    <span class="sr-only">Close</span>
</x-button>
