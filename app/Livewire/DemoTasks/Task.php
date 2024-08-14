<?php

namespace App\Livewire\DemoTasks;

use App\Models\DemoTask;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.examples')]
class Task extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.demo-tasks.task', [
            'tasks' => DemoTask::paginate(10),
        ]);
    }
}
