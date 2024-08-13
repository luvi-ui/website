<div class="space-y-4">
    <div class="rounded-md border">
        <x-table>
            <x-table.header>
                <x-table.row>
                    <x-table.head><x-checkbox /></x-table.head>
                    <x-table.head>Task</x-table.head>
                    <x-table.head>Title</x-table.head>
                    <x-table.head>Status</x-table.head>
                    <x-table.head>Priority</x-table.head>
                    <x-table.head>{{-- dropdown menu --}}</x-table.head>
                </x-table.row>
            </x-table.header>
            <x-table.body>
                <x-table.row>
                    <x-table.cell><x-checkbox /></x-table.cell>
                    <x-table.cell>TASK-8782</x-table.cell>
                    <x-table.cell>
                        <x-badge variant="outline">Documentation</x-badge>
                        Try to calculate the EXE feed, maybe it will index the multi-byte pixel!
                    </x-table.cell>
                    <x-table.cell>Backlog</x-table.cell>
                    <x-table.cell>Medium</x-table.cell>
                    <x-table.cell>
                        <x-lucide-ellipsis class="size-4 text-gray-400" />
                    </x-table.cell>
                </x-table.row>
            </x-table.body>
        </x-table>
    </div>
</div>
