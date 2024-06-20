<x-card>
    <x-card.header>
        <x-card.title>cookie settings</x-card.title>
        <x-card.description>manage your cookie settings here.</x-card.description>
    </x-card.header>
    <x-card.content class="grid gap-6">
        <div class="flex items-center justify-between space-x-2">
            <x-label
                htmlFor="necessary"
                class="flex flex-col space-y-1"
            >
                <span>strictly necessary</span>
                <span class="font-normal leading-snug text-muted-foreground">
                    these cookies are essential in order to use the website and use
                    its features.
                </span>
            </x-label>
            <div x-data="{
                'cookieNec': true,
                'cookieFunc': false,
                'cookiePerf': false,
            }">
                <x-switch
                    id="necessary"
                    x-model="cookieNec"
                />
            </div>
        </div>
        <div class="flex items-center justify-between space-x-2">
            <x-label
                htmlFor="functional"
                class="flex flex-col space-y-1"
            >
                <span>functional cookies</span>
                <span class="font-normal leading-snug text-muted-foreground">
                    these cookies allow the website to provide personalized
                    functionality.
                </span>
            </x-label>
            <x-switch id="functional" />
        </div>
        <div class="flex items-center justify-between space-x-2">
            <x-label
                htmlFor="performance"
                class="flex flex-col space-y-1"
            >
                <span>performance cookies</span>
                <span class="font-normal leading-snug text-muted-foreground">
                    these cookies help to improve the performance of the website.
                </span>
            </x-label>
            <x-switch id="performance" />
        </div>
    </x-card.content>
    <x-card.footer>
        <x-button
            variant="outline"
            class="w-full"
        >
            save preferences
        </x-button>
    </x-card.footer>
</x-card>
