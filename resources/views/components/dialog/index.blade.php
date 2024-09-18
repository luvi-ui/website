<div>
    <x-dialog.trigger>
        <x-button
            variant="outline"
            id="dialog-toggle"
            @click="document.getElementById('dialog').showModal();"
        >
            Edit Profile
        </x-button>
    </x-dialog.trigger>

    <dialog
        id="dialog"
        {{ $attributes->twMerge('w-full max-w-lg border bg-background p-6 shadow-lg  sm:rounded-lg backdrop:bg-black/80') }}
    >
        {{ $slot }}
    </dialog>
</div>
