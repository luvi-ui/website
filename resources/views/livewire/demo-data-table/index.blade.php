<div class="flex flex-col gap-8">
    <div class="w-1/2">
        <x-input
            wire:model.live.debounce.250="search"
            placeholder="Search"
        />
    </div>
    <table class="min-w-full table-fixed divide-y divide-gray-300 text-gray-800">
        <thead>
            <tr>
                <th class="p-3 text-left text-sm font-semibold text-gray-800">
                    <x-demo-data-table.sortable
                        column="number"
                        :$sortCol
                        :$sortAsc
                    >
                        Order #
                    </x-demo-data-table.sortable>
                </th>
                <th class="p-3 text-left text-sm font-semibold text-gray-800">
                    <x-demo-data-table.sortable
                        column="status"
                        :$sortCol
                        :$sortAsc
                    >
                        Status
                    </x-demo-data-table.sortable>
                </th>
                <th class="p-3 text-left text-sm font-semibold text-gray-800">
                    <div>Customer</div>
                </th>
                <th class="p-3 text-left text-sm font-semibold text-gray-800">
                    <div>Date</div>
                </th>
                <th class="p-3 text-left text-sm font-semibold text-gray-800">
                    <x-demo-data-table.sortable
                        column="amount"
                        :$sortCol
                        :$sortAsc
                    >
                        Amount
                    </x-demo-data-table.sortable>
                </th>
                <th>
                    {{-- Dropdown Menus --}}
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white text-gray-700">
            @foreach ($orders as $order)
                <tr wire:key="{{ $loop->index }}">
                    <td class="whitespace-nowrap p-3 text-sm">
                        {{ $order->number }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm">
                        {{ $order->status }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm">
                        {{ $order->customer }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm">
                        {{ $order->created_at->format('d M Y') }}
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm text-right">
                        {{ $order->amount }} €
                    </td>
                    <td class="whitespace-nowrap p-3 text-sm">
                        <div class="flex items-center justify-end">
                            <x-dropdown-menu>
                                <x-dropdown-menu.trigger variant="ghost">
                                    <x-lucide-ellipsis class="size-4 text-gray-400" />
                                </x-dropdown-menu.trigger>
                                <x-dropdown-menu.content>
                                    {{-- <x-dropdown-menu.label>My Account</x-dropdown-menu.label> --}}
                                    {{-- <x-dropdown-menu.separator /> --}}
                                    <x-dropdown-menu.item
                                        wire:click="refund({{ $order->id }})">Refund</x-dropdown-menu.item>
                                </x-dropdown-menu.content>
                            </x-dropdown-menu>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $orders->links('livewire.demo-data-table.pagination') }}
</div>
