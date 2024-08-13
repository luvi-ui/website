<?php

namespace App\Livewire\DemoTasks;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.examples')]
class Task extends Component
{
    public function render()
    {
        return view('livewire.demo-tasks.task');
    }
}
