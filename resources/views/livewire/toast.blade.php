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
            @notice.window="add($event.detail)"
            class="fixed z-50 p-4 w-full flex flex-col gap-4 pointer-events-none sm:p-6 bottom-0 items-end rtl:items-start"
        >
            <template
                x-for="notice of notices"
                :key="notice.id"
            >
                <div
                    x-show="visible.includes(notice)"
                    x-transition:enter="transition ease-in duration-200"
                    x-transition:enter-start="transform opacity-0 translate-y-2"
                    x-transition:enter-end="transform opacity-100"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="transform translate-x-0 opacity-100"
                    x-transition:leave-end="transform translate-x-full opacity-0"
                    @click="remove(notice.id)"
                    class="bg-green-500 rounded mb-4 mr-6 w-56  h-16 flex items-center justify-center text-white shadow-lg font-bold text-lg cursor-pointer pointer-events-auto"
                >
                    hi
                </div>
            </template>
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
