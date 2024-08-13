<div class="flex flex-col gap-8">
    <table class="min-w-full table-fixed divide-y divide-gray-300 text-gray-800">
        <thead>
            <tr>
                <th class="p-3 text-left text-sm font-semibold text-gray-800">
                    <div>Order #</div>
                </th>
                <th class="p-3 text-left text-sm font-semibold text-gray-800">
                    <div>Status</div>
                </th>
                <th class="p-3 text-left text-sm font-semibold text-gray-800">
                    <div>Customer</div>
                </th>
                <th class="p-3 text-left text-sm font-semibold text-gray-800">
                    <div>Date</div>
                </th>
                <th class="p-3 text-left text-sm font-semibold text-gray-800">
                    <div>Amount</div>
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white text-gray-700">
            @foreach ($orders as $order)
                <tr wire:key="{{ $loop->index }}">
                    <td class="whitespace-nowrap p-3 text-sm">
                        {{ $order->number }}
                    <td>
                    <td class="whitespace-nowrap p-3 text-sm">
                        {{ $order->status }}
                    <td>
                    <td class="whitespace-nowrap p-3 text-sm">
                        {{ $order->customer }}
                    <td>
                    <td class="whitespace-nowrap p-3 text-sm">
                        {{ $order->created_at->format('d M Y') }}
                    <td>
                    <td class="whitespace-nowrap p-3 text-sm">
                        {{ $order->amount }} €
                    <td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $orders->links('livewire.demo-data-table.pagination') }}
</div>
