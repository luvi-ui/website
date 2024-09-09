<div x-data="toast">
    toast custom
</div>

@script
    <script>
        Alpine.data('toast', () => {
            return {
                count: 1,
            }
        })
    </script>
@endscript
