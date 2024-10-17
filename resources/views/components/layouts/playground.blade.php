<x-layouts.app>
    <main>
        <div class="container relative">
            <section
                class="mx-auto flex max-w-[980px] flex-col items-center gap-2 py-8 md:py-12 md:pb-8 lg:py-24 lg:pb-20"
            >
                {{ $slot }}
            </section>
        </div>
    </main>
</x-layouts.app>
