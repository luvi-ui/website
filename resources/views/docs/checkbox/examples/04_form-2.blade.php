@php
    $items = [
        (object) [
            'id' => 'recents',
            'label' => 'Recents',
        ],
        (object) [
            'id' => 'home',
            'label' => 'Home',
        ],
        (object) [
            'id' => 'applications',
            'label' => 'Applications',
        ],
        (object) [
            'id' => 'desktop',
            'label' => 'Desktop',
        ],
        (object) [
            'id' => 'downloads',
            'label' => 'Downloads',
        ],
        (object) [
            'id' => 'documents',
            'label' => 'Documents',
        ],
    ];
@endphp

<x-form>
    <x-form.item name="sidebar">
        @foreach ($items as $item)
            <x-form.item class="flex flex-row items-center space-x-3 space-y-0">
                <x-checkbox
                    x-form:control
                    value="{{ $item->id }}"
                    name="sidebar"
                />
                <x-form.label class="text-sm font-normal">
                    {{ $item->label }}
                </x-form.label>
            </x-form.item>
        @endforeach
    </x-form.item>
    <x-button type="submit">Submit</x-button>
</x-form>
