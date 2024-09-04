<?php

namespace App\Livewire\DemoTasks;

trait Searchable
{
    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function applySearch($query)
    {
        return $this->search === ''
            ? $query
            : $query
                ->where('title', 'like', "%$this->search%")
                ->orWhere('id', 'like', "%$this->search%");
    }
}
