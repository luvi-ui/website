<x-form>
    <x-form.input
        name="display"
        placeholder="shadcn"
        description-trailing="This is your public display name. It can be your real name or a pseudonym. You can only change this once every 30 days."
    />

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

    <x-form.item>
        <x-form.label>Bio</x-form.label>
        <x-textarea
            wire:model="bio"
            x-form:control
            placeholder="Tell us a little bit about yourself"
            class="resize-none"
        />
        <x-form.description>
            You can <span>@mention</span> other users and organizations to
            link to them.
        </x-form.description>
        <x-form.message />
    </x-form.item>

    <x-button type="submit">Update profile</x-button>
</x-form>
