@php
    $styles = implode(' ', [
        'bg-white',
        'duration-1000',
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
                console.log(toastEl);
                toastEl.classList.add('animate-out', 'slide-out-to-bottom', 'fill-mode-forwards', 'fade-out');
            }, toast.duration || 1000);
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
                :id="toast.id"
                class="{{ $styles }}"
                x-on:animationend="removeToast($event, toast)"
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
