{{-- Pagination... --}}
<div class="flex justify-between items-center">
    <div class="text-gray-700 text-sm">
        Results: {{ \Illuminate\Support\Number::format($records->total()) }}
    </div>
    {{ $records->links(view: 'components.datatable.links', data: ['scrollTo' => '#tasks-table']) }}
</div>
