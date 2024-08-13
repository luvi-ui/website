<?php

namespace App\Livewire;

use App\Models\DemoOrder;
use Livewire\Component;
use Livewire\WithPagination;

class DemoDataTable extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.demo-data-table.index', [
            'orders' => DemoOrder::paginate(10),
        ]);
    }
}
