<div x-data="checkAll">
    <x-checkbox @change="handleCheck" />
</div>

@script
    <script>
        Alpine.data('checkAll', () => {
            return {
                handleCheck(e) {
                    e.target.checked ? this.selectAll() : this.deselectAll();
                },
                selectAll() {
                    this.$wire.taskIdsOnPage.forEach(id => {
                        if (this.$wire.selectedTaskIds.includes(id)) return

                        this.$wire.selectedTaskIds.push(id);
                    })
                },
                deselectAll() {
                    this.$wire.selectedTaskIds = [];
                },
            }
        })
    </script>
@endscript
