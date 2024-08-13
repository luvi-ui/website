<?php

namespace App\Livewire;

use App\Models\DemoOrder;
use Livewire\Component;
use Livewire\WithPagination;

class DemoDataTable extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
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

        return view('livewire.demo-data-table.index', [
            'orders' => $query->paginate(10),
        ]);
    }
}
