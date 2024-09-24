<x-button
    x-on:click="$dispatch('toast-show', { duration: 0, slots: { text: 'Your changes have been saved.' , action: () => { alert('it works') } } })"
>
    clickidy
</x-button>

<x-toast />
