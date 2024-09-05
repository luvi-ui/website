<?php

namespace App\Livewire\DemoTasks;

trait UseDataTable
{
    use CanHideColumns, Searchable, Sortable, CanCheckAll;

    public function getQuery()
    {
        $query = $this->query();

        $this->applySearch($query);
        $this->applySort($query);

        return $query;
    }
}
