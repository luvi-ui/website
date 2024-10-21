@props([
    'type' => 'text',
    'label' => 'text',
    'description-trailing' => '',
])

<x-form.item>
    <x-form.label>
        {{ $label }}
    </x-form.label>

    <input
        type="{{ $type }}"
        x-form:control
        {{ $attributes->twMerge('flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50') }}
    />

    @if ($descriptionTrailing)
        <x-form.description>
            {{ $descriptionTrailing }}
        </x-form.description>
    @endif

    <x-form.message name="{{ $attributes->get('wire:model') }}" />
</x-form.item>
