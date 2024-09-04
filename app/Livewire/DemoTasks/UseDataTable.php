<?php

namespace App\Livewire\DemoTasks;

trait UseDataTable
{
    use CanHideColumns, Searchable, Sortable;

    public $selectedTaskIds = [];

    public $taskIdsOnPage = [];

    public function getQuery()
    {
        $query = $this->query();

        $this->applySearch($query);
        $this->applySort($query);

        return $query;
    }
    public function makeAllCheckable($records)
    {
        $this->taskIdsOnPage = $records
            ->map(fn($record) => (string) $record->id)
            ->toArray();
    }
}
