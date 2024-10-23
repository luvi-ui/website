<x-form class="w-2/3 [&_input]:max-w-full">

    <!-- shorthand -->
    <x-form.input
        name="username"
        label="Username (Shorthand)"
        placeholder="shadcn"
        description-trailing="This is your public display name."
    />

    <!-- longhand if you need more control-->
    <x-form.item>
        <x-form.label>Username (Longhand)</x-form.label>
        <x-input
            x-form:control
            placeholder="shadcn"
        />
        <x-form.description>
            This is your public display name.
        </x-form.description>
        <x-form.message name="username" />
    </x-form.item>

    <x-button type="submit">Submit</x-button>
</x-form>
