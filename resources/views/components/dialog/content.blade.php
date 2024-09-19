<dialog
    x-ref="__dialog"
    {{ $attributes->twMerge('w-full max-w-lg border bg-background p-6 shadow-lg  sm:rounded-lg backdrop:bg-black/80') }}
>
    {{ $slot }}


    <button
        class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none data-[state=open]:bg-accent data-[state=open]:text-muted-foreground"
        variant="ghost"
        size="icon"
        @click="$refs.__dialog.close()"
    >
        <x-lucide-x class="size-4" />
        <span class="sr-only">Close</span>
    </button>
</dialog>
