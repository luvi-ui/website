<x-button
    variant="outline"
    x-on:click="$dispatch('toast-show', { duration: 3000, slots: { title: 'Event has been created', description: 'Sunday, December 03, 2023 at 9:00 AM', action: () => { alert('This works.') } } })"
>
    Show Toast
</x-button>

<x-toast />
