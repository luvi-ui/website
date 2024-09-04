<?php

namespace App\Livewire\DemoTasks;

use Illuminate\Support\Arr;

trait CanHideColumns
{
    public function toggleVisibility($column)
    {
        if (in_array($column, $this->visibleColumns)) {
            return $this->visibleColumns = array_diff($this->visibleColumns, [$column]);
        }
        Arr::push($this->visibleColumns, $column);
    }

    public function isVisible($column)
    {
        return in_array($column, $this->visibleColumns);
    }
}
