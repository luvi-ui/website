<div>yo</div>

<dialog
    id="toast"
    popover=manual
    class="bottom-0 left-auto right-0 top-auto"
    open
    x-data="{
        toasts: [],
        showToast(toast) {
            console.log(toast.slots);
            this.toasts.push(toast);
        }
    }"
    x-on:toast-show.document="showToast(event.detail)"
>
    <template x-for="toast in toasts">
        <div>
            <div x-text="toast.slots.text"></div>
            <x-button @click="toast.slots.action">action</x-button>
        </div>
    </template>
</dialog>
