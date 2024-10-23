<x-form>

    <!-- without livewire -->
    <x-form.input
        name="username"
        label="Username"
        placeholder="shadcn"
    />

    <!-- with livewire -->
    <x-form.input
        wire:model="username"
        label="Username"
        placeholder="shadcn"
    />

    <x-button type="submit">Submit</x-button>
</x-form>
