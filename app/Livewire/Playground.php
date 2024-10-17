<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.playground')]
class Playground extends Component
{
    public function render()
    {
        return view('livewire.playground');
    }
}
