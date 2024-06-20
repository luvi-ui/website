<x-form>
    <x-form.item>
        <div class="flex flex-row items-start space-x-3 space-y-0 rounded-md border p-4 shadow">
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
                    <a href="/examples/forms">mobile settings</a> page.
                </x-form.description>
            </div>
        </div>
    </x-form.item>
    <x-button type="submit">Submit</x-button>
</x-form>
