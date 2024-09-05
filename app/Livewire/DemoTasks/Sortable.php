<?php

namespace App\Livewire\DemoTasks;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Livewire\Attributes\Url;

trait Sortable
{
    #[Url]
    public $sortCol;

    #[Url]
    public $sortAsc = false;

    /**
     * @param string $column
     */
    public function sortByAsc(string $column): void
    {
        $this->sortCol = $column;
        $this->sortAsc = true;
    }

    /**
     * @param string $column
     */
    public function sortByDesc(string $column): void
    {
        $this->sortCol = $column;
        $this->sortAsc = false;
    }

    /**
     * @param Builder $query
     */
    protected function applySort(Builder $query): Builder
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
