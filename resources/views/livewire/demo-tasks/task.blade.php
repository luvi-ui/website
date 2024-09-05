<div id="tasks-table" class="space-y-4 p-8">
    <div class="flex justify-between">
        <div class="w-1/2">
            <x-input
                wire:model.live.debounce.250="search"
                placeholder="Filter tasks..."
                class="h-8 w-[150px] lg:w-[250px]"
            />
        </div>
        <div class="flex items-center space-x-4">
            <div
                x-show="$wire.selectedTaskIds.length > 0"
                x-cloak
            >
                <div class="flex items-center space-x-4">
                    <x-typography.muted>
                        <span x-text="$wire.selectedTaskIds.length"></span>
                        selected
                    </x-typography.muted>
                    <x-button
                        variant="outline"
                        size="sm"
                    >
                        <x-lucide-archive class="mr-2 size-4" /> Archive
                    </x-button>
                </div>
            </div>
            <x-dropdown-menu>
                <x-dropdown-menu.trigger
                    variant="outline"
                    size="sm"
                    class="ml-auto hidden h-8 lg:flex"
                >
                    <x-lucide-sliders-horizontal class="mr-2 size-4" />
                    View
                </x-dropdown-menu.trigger>
                <x-dropdown-menu.content class="w-56">
                    <x-dropdown-menu.label>Toggle columns</x-dropdown-menu.label>
                    <x-dropdown-menu.separator />
                    <x-dropdown-menu.checkboxitem
                        value="title"
                        wire:model.live="visibleColumns"
                    >
                        Title
                    </x-dropdown-menu.checkboxitem>
                    <x-dropdown-menu.checkboxitem
                        value="status"
                        wire:model.live="visibleColumns"
                    >
                        Status
                    </x-dropdown-menu.checkboxitem>
                    <x-dropdown-menu.checkboxitem
                        value="priority"
                        wire:model.live="visibleColumns"
                    >
                        Priority
                    </x-dropdown-menu.checkboxitem>
                </x-dropdown-menu.content>
            </x-dropdown-menu>
        </div>
    </div>
    <div class="rounded-md border">
        <x-datatable>
            <x-datatable.header>
                <x-datatable.row>
                    <x-datatable.head>
                        <x-datatable.check-all />
                    </x-datatable.head>
                    <x-datatable.head>Task</x-datatable.head>
                    @if ($this->isVisible('title'))
                        <x-datatable.head>
                            <x-local.demo-tasks.sortable
                                column="title"
                                :$sortCol
                                :$sortAsc
                            >
                                Title
                            </x-local.demo-tasks.sortable>
                        </x-datatable.head>
                    @endif
                    @if ($this->isVisible('status'))
                        <x-datatable.head>
                            <x-local.demo-tasks.sortable
                                column="status"
                                :$sortCol
                                :$sortAsc
                            >
                                Status
                            </x-local.demo-tasks.sortable>
                        </x-datatable.head>
                    @endif
                    @if ($this->isVisible('priority'))
                        <x-datatable.head>
                            <x-local.demo-tasks.sortable
                                column="priority"
                                :$sortCol
                                :$sortAsc
                            >
                                Priority
                            </x-local.demo-tasks.sortable>
                        </x-datatable.head>
                    @endif
                    <x-datatable.head>{{-- dropdown menu --}}</x-datatable.head>
                </x-datatable.row>
            </x-datatable.header>
            <x-table.body>
                @foreach ($tasks as $task)
                    <x-datatable.row wire:key="{{ $task->id }}">
                        <x-table.cell>
                            <x-checkbox
                                wire:model.live="selectedTaskIds"
                                value="{{ $task->id }}"
                            />
                        </x-table.cell>
                        <x-table.cell>{{ $task->id }}</x-table.cell>
                        @if ($this->isVisible('title'))
                            <x-table.cell>
                                <div class="flex space-x-2">
                                    <x-badge variant="outline">{{ $task->label }}</x-badge>
                                    <span class="max-w-[500px] truncate font-medium">
                                        {{ $task->title }}
                                    </span>
                                </div>
                            </x-table.cell>
                        @endif
                        @if ($this->isVisible('status'))
                            <x-table.cell>
                                <div class="flex w-[100px] items-center">
                                    <x-lucide-timer class="mr-2 size-4 text-muted-foreground" />
                                    <span>{{ $task->status }}</span>
                                </div>
                            </x-table.cell>
                        @endif
                        @if ($this->isVisible('priority'))
                            <x-table.cell>
                                <div class="flex items-center">
                                    <x-lucide-arrow-right class="mr-2 size-4 text-muted-foreground" />
                                    <span>{{ $task->priority }}</span>
                                </div>
                            </x-table.cell>
                        @endif
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
                    </x-datatable.row>
                @endforeach
            </x-table.body>
        </x-datatable>
    </div>
    {{-- Pagination... --}}
    <div class="flex justify-between items-center">
        <div class="text-gray-700 text-sm">
            Results: {{ \Illuminate\Support\Number::format($tasks->total()) }}
        </div>
        {{ $tasks->links(view: 'livewire.demo-tasks.pagination', data: ['scrollTo' => '#tasks-table']) }}
    </div>
</div>
