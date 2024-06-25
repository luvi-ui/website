@props([
    'variant' => 'outline',
    'code' => '',
])

<div
    {{ $attributes->twMerge('absolute top-4 right-4') }}
    x-data="{
        copying: false,
        timeout: null,
        async copy(code) {
            try {
                await navigator.clipboard.writeText(code);
            } catch (error) {
                console.error(error.message);
            }

        this.copying = true

        clearTimeout(this.timeout)

        this.timeout = setTimeout(() => {
            this.copying = false
        }, 3000)
        }
}">

    <x-button
        :variant=$variant
        size="icon"
        @click="copy(`{{ $code }}`)"
    >
        <x-lucide-clipboard class="size-4" x-show="!copying" />
        <x-lucide-clipboard-check class="size-4" x-show="copying" />
    </x-button>

</div>
