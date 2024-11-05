<div
    x-data="{
        __open: false,
    }"
    x-modelable="__open"
    x-id="['popover-trigger', 'popover-content']"
    {{ $attributes }}
>
    <p>__open: <span x-text="__open"></span></p>
    {{ $slot }}
</div>
