<?php

namespace App\Livewire\DemoTasks;

use Illuminate\Support\Arr;
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

    protected function applySort($query)
    {
        if ($this->sortCol) {
            $column = Arr::get(
                $this->matchColumns,
                $this->sortCol,
                $this->sortCol
            );

            $query->orderBy($column, $this->sortAsc ? "asc" : "desc");
        }

        return $query;
    }
}
