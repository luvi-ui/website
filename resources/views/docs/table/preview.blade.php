@php
    $invoices = [
        (object) [
            'invoice' => 'INV001',
            'paymentStatus' => 'Paid',
            'totalAmount' => '$250.00',
            'paymentMethod' => 'Credit Card',
        ],
        (object) [
            'invoice' => 'INV002',
            'paymentStatus' => 'Pending',
            'totalAmount' => '$150.00',
            'paymentMethod' => 'PayPal',
        ],
        (object) [
            'invoice' => 'INV003',
            'paymentStatus' => 'Unpaid',
            'totalAmount' => '$350.00',
            'paymentMethod' => 'Bank Transfer',
        ],
        (object) [
            'invoice' => 'INV004',
            'paymentStatus' => 'Paid',
            'totalAmount' => '$450.00',
            'paymentMethod' => 'Credit Card',
        ],
        (object) [
            'invoice' => 'INV005',
            'paymentStatus' => 'Paid',
            'totalAmount' => '$550.00',
            'paymentMethod' => 'PayPal',
        ],
        (object) [
            'invoice' => 'INV006',
            'paymentStatus' => 'Pending',
            'totalAmount' => '$200.00',
            'paymentMethod' => 'Bank Transfer',
        ],
        (object) [
            'invoice' => 'INV007',
            'paymentStatus' => 'Unpaid',
            'totalAmount' => '$300.00',
            'paymentMethod' => 'Credit Card',
        ],
    ];
@endphp

<x-table>
    <x-table.caption>a list of your recent invoices.</x-table.caption>
    <x-table.header>
        <x-table.row>
            <x-table.head class="w-[100px]">Invoice</x-table.head>
            <x-table.head>Status</x-table.head>
            <x-table.head>Method</x-table.head>
            <x-table.head class="text-right">Amount</x-table.head>
        </x-table.row>
    </x-table.header>
    <x-table.body>
        @foreach ($invoices as $invoice)
            <x-table.row>
                <x-table.cell class="font-medium">{{ $invoice->invoice }}</x-table.cell>
                <x-table.cell>{{ $invoice->paymentStatus }}</x-table.cell>
                <x-table.cell>{{ $invoice->paymentMethod }}</x-table.cell>
                <x-table.cell class="text-right">{{ $invoice->totalAmount }}</x-table.cell>
            </x-table.row>
        @endforeach
    </x-table.body>
    <x-table.footer>
        <x-table.row>
            <x-table.cell colspan=3>Total</x-table.cell>
            <x-table.cell class="text-right">$2,500.00</x-table.cell>
        </x-table.row>
    </x-table.footer>
</x-table>
