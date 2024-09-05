<?php

namespace App\Livewire\DemoTasks;

use App\Models\DemoTask;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
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

    public function query(): Builder
    {
        return DemoTask::query();
    }

    /**
     * @param Builder $query
     */
    public function searchQuery($query): Builder
    {
        return $query
            ->where("title", "like", "%$this->search%")
            ->orWhere("id", "like", "%$this->search%");
    }

    /**
     * @return View|Factory
     */
    public function render(): View|Factory
    {
        $query = $this->getQuery(10);

        $tasks = $query->paginate(10);

        $this->makeAllCheckable($tasks);

        return view("livewire.demo-tasks.task", [
            "tasks" => $tasks,
        ]);
    }
}
