<div>
    <x-button
        variant="outline"
        @click="$dispatch('notice', {type: 'success', text: '🔥 Success!'})"
    >
        make toast
    </x-button>

    <template x-teleport="body">
        <div
            x-data="toast"
            @notice.window="showToast = true;"
            class="fixed z-50 p-4 w-full flex flex-col gap-4 pointer-events-none sm:p-6 bottom-0 items-end rtl:items-start"
        >
            <div
                x-show="showToast"
                x-transition.duration.500ms
                class="bg-green-500 w-32 p-4 rounded h-16 relative duration-300 transform transition ease-in-out max-w-xs w-full pointer-events-auto"
            >
                hi
            </div>
        </div>
    </template>
</div>

@script
    <script>
        Alpine.data('toast', () => {
            return {
                showToast: false,
                notices: [],
                visible: [],
                add(notice) {
                    notice.id = Date.now()
                    this.notices.push(notice)
                    this.fire(notice.id)
                },
                fire(id) {
                    this.visible.push(this.notices.find(notice => notice.id == id))
                    const timeShown = 2000 * this.visible.length
                    setTimeout(() => {
                        this.remove(id)
                    }, timeShown)
                },
                remove(id) {
                    const notice = this.visible.find(notice => notice.id == id)
                    const index = this.visible.indexOf(notice)
                    this.visible.splice(index, 1)
                },
            }
        })
    </script>
@endscript
