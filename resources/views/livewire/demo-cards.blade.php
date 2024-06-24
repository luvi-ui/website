<div class="items-start justify-center gap-6 rounded-lg p-8 md:grid lg:grid-cols-2 xl:grid-cols-3">
    <div class="col-span-2 grid items-start gap-6 lg:col-span-1">
        <x-demo.cards.container>
            <x-demo.cards.create-account />
        </x-demo.cards.container>
        <x-demo.cards.container>
            <x-demo.cards.payment-method />
        </x-demo.cards.container>
    </div>
    <div class="col-span-2 grid items-start gap-6 lg:col-span-1">
        <x-demo.cards.container>
            <livewire:team-members />
        </x-demo.cards.container>
        <x-demo.cards.container>
            <x-demo.cards.share-document />
        </x-demo.cards.container>
        <x-demo.cards.container>
            <x-demo.cards.date-picker />
        </x-demo.cards.container>
        <x-demo.cards.container>
            <x-demo.cards.notifications />
        </x-demo.cards.container>
    </div>
    <div class="col-span-2 grid items-start gap-6 lg:col-span-2 lg:grid-cols-2 xl:col-span-1 xl:grid-cols-1">
        <x-demo.cards.container>
            <livewire:report-issue />
        </x-demo.cards.container>
        <x-demo.cards.container>
            <x-demo.cards.github />
        </x-demo.cards.container>
        <x-demo.cards.container>
            <x-demo.cards.cookie-settings />
        </x-demo.cards.container>
    </div>
</div>
