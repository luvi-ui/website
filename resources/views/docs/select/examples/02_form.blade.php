<x-form>
    <x-form.item>
        <x-form.label>Email</x-form.label>
        <x-select x-form:control>
            <option
                value="Select a verified email to display"
                disabled
            >
                Select a verified email to display </option>
            <option value="m@example.com">m@example.com</option>
            <option value="m@google.com">m@google.com</option>
            <option value="m@support.com">m@support.com</option>
        </x-select>
        <x-form.description>
            You can manage verified email addresses in your
            <x-link href="/examples/forms">email settings</x-link>.
        </x-form.description>
        <x-form.message />
    </x-form.item>
    <x-button type="submit">Update profile</x-button>
</x-form>
