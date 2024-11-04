@props([
    'defaultValue' => '',
])

<li
    x-init="'{{ $defaultValue }}' ? init('{{ $defaultValue }}'): null"
    x-dropdown-menu:radiogroup
    role="none"
    class="col-span-full grid grid-cols-subgrid"
>
    <ul
        role="group"
        class="col-span-full grid grid-cols-subgrid"
    >
        {{ $slot }}
    </ul>
</li>
