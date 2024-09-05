<div id="tasks-table" class="space-y-4 p-8">
    <div class="flex justify-between">
        <div class="w-1/2">
            <x-datatable.search />
        </div>
        <div class="flex items-center space-x-4">
            <x-datatable.bulk-actions>
                <x-button
                    variant="outline"
                    size="sm"
                >
                    <x-lucide-archive class="mr-2 size-4" /> Archive
                </x-button>
            </x-datatable.bulk-actions>
            <x-dropdown-menu>
                <x-dropdown-menu.trigger
                    variant="outline"
                    size="sm"
                    class="ml-auto hidden h-8 lg:flex"
                >
                    <x-lucide-sliders-horizontal class="mr-2 size-4" />
                    {{ __('View') }}
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

                        <x-datatable.head column="title" :$sortCol :$sortAsc hideable>
                            Title
                        </x-datatable.head>

                        <x-datatable.head column="status" :$sortCol :$sortAsc hideable>
                            Status
                        </x-datatable.head>
                        <x-datatable.head column="priority" :$sortCol :$sortAsc hideable>
                            Priority
                        </x-datatable.head>
                    <x-datatable.head>{{-- dropdown menu --}}</x-datatable.head>
                </x-datatable.row>
            </x-datatable.header>
            <x-datatable.body>
                @foreach ($tasks as $task)
                    <x-datatable.row wire:key="{{ $task->id }}">
                        <x-datatable.cell>
                            <x-checkbox
                                wire:model.live="selectedTaskIds"
                                value="{{ $task->id }}"
                            />
                        </x-datatable.cell>
                        <x-datatable.cell>{{ $task->id }}</x-datatable.cell>
                        <x-datatable.cell column="title">
                            <div class="flex space-x-2">
                                <x-badge variant="outline">{{ $task->label }}</x-badge>
                                <span class="max-w-[500px] truncate font-medium">
                                    {{ $task->title }}
                                </span>
                            </div>
                        </x-datatable.cell>
                        <x-datatable.cell column="status">
                            <div class="flex w-[100px] items-center">
                                <x-lucide-timer class="mr-2 size-4 text-muted-foreground" />
                                <span>{{ $task->status }}</span>
                            </div>
                        </x-datatable.cell>
                        <x-datatable.cell column="priority">
                            <div class="flex items-center">
                                <x-lucide-arrow-right class="mr-2 size-4 text-muted-foreground" />
                                <span>{{ $task->priority }}</span>
                            </div>
                        </x-datatable.cell>
                        <x-datatable.cell>
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
                        </x-datatable.cell>
                    </x-datatable.row>
                @endforeach
            </x-datatable.body>
        </x-datatable>
    </div>
    <x-datatable.pagination :records="$tasks" />
</div>
