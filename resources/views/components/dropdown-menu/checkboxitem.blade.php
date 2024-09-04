@props([
    'disabled' => false,
])
<li
    role="menuitemcheckbox"
    aria-disabled="{{ $disabled ? 'true' : 'false' }}"
    x-dropdown-menu:checkboxitem
    aria-label="{{ $slot }}"
    tabindex="-1"
    {{ $attributes->whereDoesntStartWith(['wire:model', 'x-model', 'value'])->twMerge([
            'hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground',
            'relative flex w-full cursor-default select-none items-center',
            'rounded-sm py-1.5 text-sm outline-none transition-colors',
            'opacity-50 cursor-not-allowed' => $disabled,
            'p-2',
        ]) }}
>
    <label class="group w-full flex items-center gap-x-2">
        <div class="invisible group-has-[:checked]:visible">
            <x-lucide-check class="w-4 h-4" />
        </div>
        <input
            class="sr-only"
            type="checkbox"
            value="{{ $attributes->get('value') }}"
            {{ $attributes->whereStartsWith('wire:model', 'x-model') }}
        />
        {{ $slot }}
    </label>
</li>
