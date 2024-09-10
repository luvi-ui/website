<div x-data="toast">
    <x-button
        variant="outline"
        @click="openToast"
    >
        make toast
    </x-button>
    <div
        x-show="open"
        class="w-96 p-4 rounded h-32 fixed bottom-4 right-4 transform-gpu transition-transform duration-400 ease"
        x-class="success ? 'bg-green-500' : 'bg-red-500'"
        x-transition:enter-start="translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave-start="translate-y-0"
        x-transition:leave-end="translate-y-full"
    >
        <p><strong x-text="title"></strong></p>
        <p
            class="mt-2 text-sm text-white"
            x-text="message"
        ></p>
    </div>

</div>

@script
    <script>
        Alpine.data('toast', () => {
            return {
                open: false,
                title: "Toast Title",
                message: "Toast message",
                success: false,
                openToast() {
                    console.log('toasty');
                    this.open = true
                    setTimeout(() => {
                        this.open = false
                    }, 5000)
                }
            }
        })
    </script>
@endscript
