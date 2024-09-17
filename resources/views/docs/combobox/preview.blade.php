@use('App\Models\DemoMail')

<div class="flex flex-col space-y-2">
    <x-typography.muted>Try searching for 'wil'</x-typography.muted>
    <livewire:ui.combobox
        :model="DemoMail::class"
        :searchable="['name']"
        display="name"
        placeholder="Search..."
    />
</div>
