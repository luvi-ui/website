<div class="space-y-4">
    <div class="rounded-md border">
        <x-table>
            <x-table.header>
                <x-table.row>
                    <x-table.head><x-checkbox /></x-table.head>
                    <x-table.head>Task</x-table.head>
                    <x-table.head>
                        <x-local.demo-tasks.sortable>
                            Title
                        </x-local.demo-tasks.sortable>
                    </x-table.head>
                    <x-table.head>
                        <x-local.demo-tasks.sortable>
                            Status
                        </x-local.demo-tasks.sortable>
                    </x-table.head>
                    <x-table.head>
                        <x-local.demo-tasks.sortable>
                            Priority
                        </x-local.demo-tasks.sortable>
                    </x-table.head>
                    <x-table.head>{{-- dropdown menu --}}</x-table.head>
                </x-table.row>
            </x-table.header>
            <x-table.body>
                @foreach ($tasks as $task)
                    <x-table.row>
                        <x-table.cell><x-checkbox /></x-table.cell>
                        <x-table.cell>{{ $task->id }}</x-table.cell>
                        <x-table.cell>
                            <div class="flex space-x-2">
                                <x-badge variant="outline">{{ $task->label }}</x-badge>
                                <span class="max-w-[500px] truncate font-medium">
                                    {{ $task->title }}
                                </span>
                            </div>
                        </x-table.cell>
                        <x-table.cell>
                            <div class="flex w-[100px] items-center">
                                <x-lucide-timer class="mr-2 size-4 text-muted-foreground" />
                                <span>{{ $task->status }}</span>
                            </div>
                        </x-table.cell>
                        <x-table.cell>
                            <div class="flex items-center">
                                <x-lucide-arrow-right class="mr-2 size-4 text-muted-foreground" />
                                <span>{{ $task->priority }}</span>
                            </div>
                        </x-table.cell>
                        <x-table.cell>
                            <x-dropdown-menu>
                                <x-dropdown-menu.trigger variant="ghost">
                                    <x-lucide-ellipsis class="size-4 text-gray-400" />
                                </x-dropdown-menu.trigger>
                                <x-dropdown-menu.content>
                                    <x-dropdown-menu.item>Edit</x-dropdown-menu.item>
                                    <x-dropdown-menu.item>Make a copy</x-dropdown-menu.item>
                                    <x-dropdown-menu.item>Favorite</x-dropdown-menu.item>
                                </x-dropdown-menu.content>
                            </x-dropdown-menu>
                        </x-table.cell>
                    </x-table.row>
                @endforeach
            </x-table.body>
        </x-table>
    </div>
    {{-- Pagination... --}}
    <div class="pt-4 flex justify-between items-center">
        <div class="text-gray-700 text-sm">
            Results: {{ \Illuminate\Support\Number::format($tasks->total()) }}
        </div>
        {{ $tasks->links('livewire.demo-tasks.pagination') }}
    </div>
</div>
