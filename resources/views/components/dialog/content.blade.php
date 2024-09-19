<dialog
    x-ref="__dialog"
    {{ $attributes->twMerge('overlay w-full max-w-lg border bg-background p-6 shadow-lg  sm:rounded-lg backdrop:bg-black/80') }}
>
    {{ $slot }}
</dialog>
