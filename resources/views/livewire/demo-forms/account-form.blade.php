<div>
    <x-form>
        <x-form.item name="name">
            <x-form.label>Name</x-form.label>
            <x-input
                x-form:control
                placeholder="Your name"
            />
            <x-form.description>
                This is the name that will be displayed on your profile and in
                emails.
            </x-form.description>
            <x-form.message />
        </x-form.item>

        <x-form.item name="dob">
            <x-form.label>Date of birth</x-form.label>
            <x-input
                type="date"
                x-form:control
            />
            <x-form.description>
                Your date of birth is used to calculate your age.
            </x-form.description>
            <x-form.message />
        </x-form.item>

        <x-form.item
            class="flex flex-col"
            name="language"
        >
            <x-form.label>Language</x-form.label>
            <div x-data="{ selected: '' }">
                <x-popover>
                    <x-popover.trigger>
                        <x-button
                            x-form:control
                            x-text="selected || 'Select a language...'"
                            variant="outline"
                            role="combobox"
                            class="w-[200px] justify-between"
                        >
                            <x-lucide-caret-sort class="ml-2 h-4 w-4 shrink-0 opacity-50" />
                        </x-button>
                    </x-popover.trigger>
                    <x-popover.content class="w-[200px] p-0">
                        <div
                            x-searchable
                            class="-m-3"
                        >
                            <div class="flex items-center border-b px-3">
                                <x-lucide-magnifying-glass class="mr-2 h-4 w-4 shrink-0 opacity-50" />
                                <x-input
                                    x-searchable:input
                                    class="!border-0 !ring-0 !px-0 h-10 placeholder:text-muted-foreground"
                                    placeholder="Search language..."
                                />
                            </div>
                            <div
                                x-searchable:empty
                                class="py-6 text-center text-sm"
                            >
                                No language found.
                            </div>
                            <x-radio-group
                                x-radio:group
                                wire:model="language"
                                name="language"
                            >
                                @foreach ($languages as $language)
                                    <x-label
                                        x-searchable:item
                                        x-on:change="console.log(event)"
                                        class="flex px-2 py-3 cursor-default select-none items-center rounded-sm text-sm outline-none hover:bg-accent hover:text-accent-foreground"
                                    >
                                        <x-radio-group.item
                                            value="{{ $language['value'] }}"
                                            class="peer sr-only"
                                        />
                                        <x-lucide-check class="size-4 mr-2 invisible peer-checked:visible" />
                                        <span>{{ $language['label'] }}</span>
                                    </x-label>
                                @endforeach
                            </x-radio-group>
                        </div>
                        </x-popover-content>
                </x-popover>
            </div>
            <x-form.description>
                This is the language that will be used in the dashboard.
            </x-form.description>
            <x-form.message />
        </x-form.item>

        <x-button type="submit">Update account</x-button>
    </x-form>
</div>
