<?php

namespace App\Livewire\DemoForms;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.examples-forms')]
class AppearanceForm extends Component
{
    public function render()
    {
        return view('livewire.demo-forms.appearance-form');
    }
}
