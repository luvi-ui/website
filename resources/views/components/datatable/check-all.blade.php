<div x-data="checkAll">
    <x-checkbox
        x-ref="checkbox"
        @change="handleCheck"
    />
</div>

@script
    <script>
        Alpine.data('checkAll', () => {
            return {
                init() {
                    this.$wire.$watch('selectedTaskIds', () => {
                        this.updateCheckAllState();
                    })

                    this.$wire.$watch('taskIdsOnPage', () => {
                        this.updateCheckAllState();
                    })
                },

                updateCheckAllState() {
                    if (this.pageIsSelected()) {
                        this.$refs.checkbox.checked = true;
                        this.$refs.checkbox.indeterminate = false;
                    } else if (this.pageIsEmpty()) {
                        this.$refs.checkbox.checked = false;
                        this.$refs.checkbox.indeterminate = false;
                    } else {
                        this.$refs.checkbox.checked = false;
                        this.$refs.checkbox.indeterminate = true;
                    }
                },

                pageIsSelected() {
                    return this.$wire.taskIdsOnPage.every(id => this.$wire.selectedTaskIds.includes(id));
                },

                pageIsEmpty() {
                    return this.$wire.selectedTaskIds.length === 0;
                },

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
