<div
    x-data="{ navOpen: false }"
    {{ $attributes }}
>
    <button
        type="button"
        @click="navOpen = !navOpen; document.body.classList.toggle('overflow-hidden')"
    >
        <x-lucide-menu class="size-5 text-gray-700" />
    </button>
    <div
        x-show="navOpen"
        class="fixed inset-0 h-dvh bg-white p-4"
    >
        <button
            @click="navOpen = !navOpen; document.body.classList.toggle('overflow-hidden')"
            type="button"
            class="z-50 absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none data-[state=open]:bg-secondary"
        >
            <x-lucide-x class="size-5" />
            <span class="sr-only">Close</span>
        </button>

        <x-local.sidebar-left />
    </div>
</div>
