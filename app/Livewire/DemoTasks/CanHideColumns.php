<?php

namespace App\Livewire\DemoTasks;

trait CanHideColumns
{
    public function toggleVisibility($column)
    {
        if (in_array($column, $this->visibleColumns)) {
            return $this->visibleColumns = array_values(
                array_diff($this->visibleColumns, [$column])
            );
        }
        $this->visibleColumns[] = $column;
    }

    public function isVisible($column)
    {
        return in_array($column, $this->visibleColumns);
    }
}
