<x-button
    variant="outline"
    x-on:click="$dispatch(
        'toast-show',
        {
            variant: 'destructive',
            slots: {
                title: 'Uh oh! Something went wrong.',
                description: 'There was a problem with your request.',
                action: () => { alert('Try again.') },
                actionText: 'Try again'
            }
        }
    )"
>
    Show Toast
</x-button>
