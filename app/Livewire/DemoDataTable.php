<?php

namespace App\Livewire;

use App\Models\DemoOrder;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class DemoDataTable extends Component
{
    use WithPagination;

    public $search = '';

    #[Url]
    public $sortCol;

    #[Url]
    public $sortAsc = false;

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function refund(DemoOrder $order)
    {
        $order->refund();
    }

    public function sortBy($column)
    {
        if ($this->sortCol === $column) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortCol = $column;
            $this->sortAsc = false;
        }

    }

    protected function applySorting($query)
    {
        if ($this->sortCol) {
            $column = match ($this->sortCol) {
                'number' => 'number',
                'status' => 'status',
                'date' => 'created_at',
                'amount' => 'amount',
            };

            $query->orderBy($column, $this->sortAsc ? 'asc' : 'desc');
        }

        return $query;
    }

    public function applySearch($query)
    {
        return $this->search === ''
            ? $query
            : $query
                ->where('customer', 'like', "%$this->search%")
                ->orWhere('number', 'like', "%$this->search%");
    }

    public function render()
    {
        $query = DemoOrder::query();

        $query = $this->applySearch($query);

        $query = $this->applySorting($query);

        return view('livewire.demo-data-table.index', [
            'orders' => $query->paginate(10),
        ]);
    }
}
