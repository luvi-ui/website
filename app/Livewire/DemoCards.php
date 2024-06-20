<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.examples')]
class DemoCards extends Component
{
    public function render()
    {
        return view('livewire.demo-cards');
    }
}
