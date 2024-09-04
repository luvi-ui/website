<?php

namespace App\Livewire\DemoTasks;

use App\Models\DemoTask;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.examples')]
class Task extends Component
{
    use WithPagination;

    public $search = '';

    public $visibleColumns;

    #[Url]
    public $sortCol;

    #[Url]
    public $sortAsc = false;

    public $selectedTaskIds = [];

    public $taskIdsOnPage = [];

    public function mount()
    {
        $this->visibleColumns = collect(['title', 'status', 'priority']);
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function toggleVisibility($column)
    {
        if ($this->visibleColumns->contains($column)) {
            return $this->visibleColumns = $this->visibleColumns->diff($column);
        }

        $this->visibleColumns->push($column);

    }

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

    public function applySearch($query)
    {
        return $this->search === ''
            ? $query
            : $query
                ->where('title', 'like', "%$this->search%")
                ->orWhere('id', 'like', "%$this->search%");
    }

    public function render()
    {
        $query = DemoTask::query();

        $query = $this->applySearch($query);

        $query = $this->applySorting($query);

        $tasks = $query->paginate(10);

        $this->taskIdsOnPage = $tasks->map(fn ($task) => (string) $task->id)->toArray();

        return view('livewire.demo-tasks.task', [
            'tasks' => $tasks,
        ]);
    }
}
