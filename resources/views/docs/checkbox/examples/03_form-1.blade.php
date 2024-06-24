<x-form>
    <x-form.item>
        <div class="flex flex-row items-start p-4 space-x-3 space-y-0 border rounded-md shadow">
            <x-checkbox
                x-form:control
                checked
                value="mobile-notifications"
            />
            <div class="space-y-1 leading-none">
                <x-form.label>
                    Use different settings for my mobile devices
                </x-form.label>
                <x-form.description>
                    You can manage your mobile notifications in the
                    <x-link href="/examples/forms">mobile settings</x-link> page.
                </x-form.description>
            </div>
        </div>
    </x-form.item>
    <x-button type="submit">Submit</x-button>
</x-form>
