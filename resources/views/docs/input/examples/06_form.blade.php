<x-form class="w-2/3 [&_input]:max-w-full">
    <x-form.item>
        <x-form.label>Username</x-form.label>
        <x-input
            x-form:control
            placeholder="shadcn"
        />
        <x-form.description>
            This is your public display name.
        </x-form.description>
        <x-form.message />
    </x-form.item>
    <x-button type="submit">Submit</x-button>
</x-form>
