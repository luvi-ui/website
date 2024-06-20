@props([
    'preview' => '',
    'code' => '',
])

<div class="pb-12 pt-8">
    <div x-data="{ showPreview: true }">
        <div class="flex items-center justify-between pb-3">
            <div
                class="inline-flex h-9 items-center text-muted-foreground w-full justify-start rounded-none border-b bg-transparent p-0">
                <button
                    @click="showPreview = true"
                    class="inline-flex items-center justify-center whitespace-nowrap py-1 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background relative h-9 rounded-none border-b-2 border-b-transparent bg-transparent px-4 pb-3 pt-2 font-semibold text-muted-foreground shadow-none transition-none"
                    :class="{ '!border-b-primary !text-foreground shadow-none': showPreview }"
                >
                    Preview
                </button>
                <button
                    @click="showPreview = false"
                    class="inline-flex items-center justify-center whitespace-nowrap py-1 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background relative h-9 rounded-none border-b-2 border-b-transparent bg-transparent px-4 pb-3 pt-2 font-semibold text-muted-foreground shadow-none transition-none data-[state=active]:border-b-primary data-[state=active]:text-foreground data-[state=active]:shadow-none"
                    :class="{ '!border-b-primary !text-foreground shadow-none': !showPreview }"
                >
                    Code
                </button>
            </div>
        </div>

        <div
            x-show="showPreview"
            class="preview flex min-h-[350px] w-full justify-center p-10 items-center rounded-md border"
        >
            @if ($preview instanceof Illuminate\View\ComponentSlot)
                {{ $preview }}
            @else
                @include($preview)
            @endif
        </div>

        <div
            x-show="!showPreview"
            class="rounded-md"
        >
            <pre><x-torchlight-code language='blade' contents="{{ $code }}" /></pre>
        </div>
    </div>
</div>
