<?php

namespace App\Livewire\DemoTasks;

use App\Models\DemoTask;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.examples')]
class Task extends Component
{
    use UseDataTable, WithPagination;

    public $visibleColumns = ['title', 'status', 'priority'];

    public $selectedTaskIds = [];

    public $taskIdsOnPage = [];

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
