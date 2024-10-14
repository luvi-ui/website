@php
    $styles = implode(' ', [
        'group',
        'pointer-events-auto',
        'relative',
        'flex',
        'w-full',
        'items-center',
        'justify-between',
        'space-x-2',
        'overflow-hidden',
        'rounded-md',
        'border',
        'p-4',
        'pr-6',
        'shadow-lg',
        'animate-in',
        'slide-in-from-bottom',
    ]);

@endphp

<dialog
    id="toast"
    popover=manual
    class="bottom-0 left-auto right-0 top-auto w-full max-w-[420px] p-4 space-y-4 overflow-hidden"
    open
    x-data="{
        toasts: [],
        init() {
            this.showToasts({{ json_encode(session()->get('toasts', [])) }});
        },

        showToast(toast) {
            if (typeof toast.slots.action === 'string') {
                toast.slots.action = $wire[toast.slots.action];
            }
            this.toasts.push(toast);
        },

        removeToastfromDOM({ animationName }) {
            if (animationName === 'exit') this.$el.parentElement.remove();
        },

        showToasts(toasts) {
            toasts.forEach(toast => this.showToast(toast))
        },
    }"
    x-id="['toast']"
    x-on:toast-show.document="showToast(event.detail)"
>
    <template x-for="toast in toasts">
        <div>
            <div
                class="{{ $styles }}"
                x-on:click="$el.classList.add('animate-out', 'slide-out-to-bottom', 'fill-mode-forwards', 'fade-out');"
                x-on:animationend="removeToastfromDOM($event)"
            >
                <div class="grid gap-1">
                    <div
                        class="text-sm font-semibold"
                        x-text="toast.slots.title"
                    ></div>
                    <div
                        class="text-xs opacity-90"
                        x-text="toast.slots.description"
                    ></div>
                </div>

                <x-button
                    x-on:click="toast.slots.action"
                    variant="outline"
                >Action</x-button>

            </div>
        </div>
    </template>
</dialog>
