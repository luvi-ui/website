<?php

namespace App\Livewire\DemoTasks;

trait CanCheckAll
{
    public $selectedTaskIds = [];

    public $taskIdsOnPage = [];

    public function makeAllCheckable($records)
    {
        $this->taskIdsOnPage = $records
            ->map(fn($record) => (string) $record->id)
            ->toArray();
    }
}
