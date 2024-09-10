<div x-data="{ showToast1: false, showToast2: false, showToast3: false }">
    <x-button
        variant="outline"
        @click="showToast1 = true"
    >
        make toast
    </x-button>
    <x-button
        variant="outline"
        @click="showToast2 = true"
    >
        make toast
    </x-button>
    <x-button
        variant="outline"
        @click="showToast3 = true"
    >
        make toast
    </x-button>

    <template x-teleport="body">
        <div
            class="fixed z-50 p-4 w-full flex flex-col gap-4 pointer-events-none sm:p-6 bottom-0 items-end rtl:items-start">
            <div
                x-show="showToast1"
                x-transition.duration-500
                class="bg-green-500 w-32 p-4 rounded h-16 relative duration-300 transform transition ease-in-out max-w-xs w-full pointer-events-auto"
            >
                hi
            </div>
            <div
                x-show="showToast2"
                x-transition.duration-500
                class="bg-green-500 w-32 p-4 rounded h-16 relative duration-300 transform transition ease-in-out max-w-xs w-full pointer-events-auto"
            >
                hi
            </div>
            <div
                x-show="showToast3"
                x-transition.duration-500
                class="bg-green-500 w-32 p-4 rounded h-16 relative duration-300 transform transition ease-in-out max-w-xs w-full pointer-events-auto"
            >
                hi
            </div>
        </div>
    </template>
</div>
