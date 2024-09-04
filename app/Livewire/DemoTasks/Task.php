<?php

namespace App\Livewire\DemoTasks;

use App\Models\DemoTask;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout("components.layouts.examples")]
class Task extends Component
{
    use UseDataTable, WithPagination;

    public $visibleColumns = ["title", "status", "priority"];

    public $matchColumns = [
        "title" => "title",
        "status" => "status",
        "priority" => "priority",
    ];

    public function query()
    {
        return DemoTask::query();
    }

    public function render()
    {
        $query = $this->getQuery(10);

        $tasks = $query->paginate(10);

        $this->makeAllCheckable($tasks);

        return view("livewire.demo-tasks.task", [
            "tasks" => $tasks,
        ]);
    }
}
