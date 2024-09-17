<x-layouts.docs>
    <div>
        <x-docs.component-info
            name="Combobox"
            description="Autocomplete input and command palette with a list of suggestions."
        />

        <div class="mt-8">
            <x-alert>
                <x-lucide-info class="size-4" />
                <x-alert.title>Heads up!</x-alert.title>
                <x-alert.description>
                    This is a Livewire Component, so in order to use it, your project needs to have Livewire set up.
                </x-alert.description>
            </x-alert>

            <x-typography.p>
                Consider this component a pre-release since its still missing keyboard navigation and ARIA
                related attributes.
            </x-typography.p>

            <x-typography.p>
                It can be used together with your existing Eloquent Models by default. If you want to use
                this component without an underlying model, you can adjust this behaviour in
                <x-typography.inline-code>app/Livewire/Ui/Combobox.php</x-typography.inline-code> after you've published
                it.
            </x-typography.p>

            <x-typography.p>
                The <x-typography.inline-code>searchable</x-typography.inline-code> prop defines which model attributes
                should be searched.
            </x-typography.p>

            <x-typography.p>
                The <x-typography.inline-code>display</x-typography.inline-code> prop defines which model attribute
                should be used to display the selected result.
            </x-typography.p>
        </div>

        <x-preview name="combobox" />
        <x-installation name="combobox" />
        <x-usage name="combobox" />
    </div>
</x-layouts.docs>
