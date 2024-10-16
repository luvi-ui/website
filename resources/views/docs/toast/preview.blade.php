<x-button
    variant="outline"
    x-on:click="$dispatch('toast-show', { slots: { title: 'Scheduled: Catch up', description: 'Friday, February 10, 2023 at 5:57 PM', action: () => { alert('Custom Action') } } })"
>
    Add to calendar
</x-button>
