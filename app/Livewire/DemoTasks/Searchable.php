<?php

namespace App\Livewire\DemoTasks;

trait Searchable
{
    public $search = "";

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function applySearch($query)
    {
        return $this->search === "" ? $query : $this->searchQuery($query);
    }
}
