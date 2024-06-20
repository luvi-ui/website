<x-form class="w-2/3 space-y-6">
    <x-form.item
        class="space-y-3"
        name="notification"
    >
        <x-form.label>Notify me about...</x-form.label>
        <x-radio-group
            x-form:control
            name="notification"
            class="space-y-1"
        >
            <x-form.item class="flex items-center space-x-3 space-y-0">
                <x-radio-group.item
                    x-form:control
                    value="all"
                />
                <x-form.label class="font-normal">
                    All new messages
                </x-form.label>
            </x-form.item>
            <x-form.item class="flex items-center space-x-3 space-y-0">
                <x-radio-group.item
                    x-form:control
                    value="mentions"
                />
                <x-form.label class="font-normal">
                    Direct messages and mentions
                </x-form.label>
            </x-form.item>
            <x-form.item class="flex items-center space-x-3 space-y-0">
                <x-radio-group.item
                    x-form:control
                    value="none"
                />
                <x-form.label class="font-normal">Nothing</x-form.label>
            </x-form.item>

        </x-radio-group>
        <x-form.description> We will notify around the world in no time</x-form.description>
    </x-form.item>

    <x-button type="submit">Submit</x-button>
</x-form>
