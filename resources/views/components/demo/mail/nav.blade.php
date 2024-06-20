@props(['links'])

<div class="group flex flex-col gap-4 py-2 data-[collapsed=true]:py-2">
    <nav class="grid gap-1 px-2 group-[[data-collapsed=true]]:justify-center group-[[data-collapsed=true]]:px-2">
        @foreach ($links as $link)
            @php $icon = "lucide-{$link['icon']}"; @endphp
            <x-button :variant="$link['variant']">
                <x-dynamic-component
                    :component="$icon"
                    class="mr-2 h-4 w-4"
                />
                {{ $link['title'] }}
                <span class="ml-auto">
                    {{ $link['label'] }}
                </span>
            </x-button>
        @endforeach
    </nav>
</div>
