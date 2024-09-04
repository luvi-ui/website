<?php

namespace App\Livewire\DemoTasks;

use Livewire\Attributes\Url;

trait Sortable
{
    #[Url]
    public $sortCol;

    #[Url]
    public $sortAsc = false;

    public function sortByAsc($column)
    {
        $this->sortCol = $column;
        $this->sortAsc = true;
    }

    public function sortByDesc($column)
    {
        $this->sortCol = $column;
        $this->sortAsc = false;
    }

    protected function applySorting($query)
    {
        if ($this->sortCol) {
            $column = match ($this->sortCol) {
                'title' => 'title',
                'status' => 'status',
                'priority' => 'priority',
            };

            $query->orderBy($column, $this->sortAsc ? 'asc' : 'desc');
        }

        return $query;
    }
}
