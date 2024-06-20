<x-layouts.app>
    <div class="border-b">
        <div class="docs container mx-auto px-4 py-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-12">
                <div class="hidden lg:block lg:col-span-2">
                    <x-local.sidebar-left />
                </div>
                <div class="lg:col-span-7 mt-6 lg:mt-0">
                    {{ $slot }}
                </div>
                <div class="lg:col-span-3">
                    <x-on-this-page />
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
