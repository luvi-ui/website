<x-button
    variant="outline"
    x-on:click="$dispatch('toast-show', { slots: { title: 'Uh oh! Something went wrong.', description: 'There was a problem with your request.' } })"
>
    Show Toast
</x-button>
