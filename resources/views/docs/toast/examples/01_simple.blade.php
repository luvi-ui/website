<x-button
    variant="outline"
    x-on:click="$dispatch('toast-show', { slots: { description: 'Your message has been sent.' } })"
>
    Show Toast
</x-button>
