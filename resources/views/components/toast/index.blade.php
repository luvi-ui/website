@props([
    'variant' => null,
])

@inject('toast', 'App\Services\ToastCvaService')

<dialog
    popover=manual
    class="bottom-0 left-auto right-0 top-auto w-full max-w-[420px] p-4 space-y-4 overflow-hidden"
    :class="{ 'p-4': toasts.length > 0 }"
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

            toast.id = `toast-${window.getObjectId(toast)}`;
            this.toasts.push(toast);

            toast.timerId = setTimeout(async () => {
                const toastEl = this.$el.querySelector(`#${toast.id}`);
                toastEl.setAttribute('data-state', 'closed');
            }, toast.duration || 3000);
        },

        removeToast({ animationName }, toast) {
            if (animationName === 'exit') {
                this.toasts.splice(this.toasts.indexOf(toast), 1);
            }
        },

        showToasts(toasts) {
            toasts.forEach(toast => this.showToast(toast))
        },
    }"
    x-on:toast-show.document="showToast(event.detail)"
>
    <template
        x-for="toast in toasts"
        :key="toast.id"
    >
        <div>
            <div
                data-state="open"
                :id="toast.id"
                role="status"
                aria-live="off"
                aria-atomic="true"
                tabindex="0"
                x-on:animationend="removeToast($event, toast)"
                {{ $attributes->twMerge($toast(['variant' => $variant])) }}
            >
                <div class="grid gap-1">
                    <template x-if="toast.slots.title">
                        <div
                            class="text-sm font-semibold [&+div]:text-xs"
                            x-text="toast.slots.title"
                        ></div>
                    </template>
                    <div
                        class="text-sm opacity-90"
                        x-text="toast.slots.description"
                    ></div>
                </div>

                <template x-if="Object.keys(toast.slots).includes('action')">
                    <x-button
                        x-on:click="toast.slots.action"
                        variant="outline"
                        x-text="toast.slots.actionText || 'Action'"
                    >
                    </x-button>
                </template>

            </div>
        </div>
    </template>
</dialog>
