@props([
    'column' => null
])
@if($column)
    @if($this->isVisible($column))
    <x-table.cell>
        {{ $slot }}
    </x-table.cell>
    @endif
@else
<x-table.cell>
    {{ $slot }}
</x-table.cell>
@endif
