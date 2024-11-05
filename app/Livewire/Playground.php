<?php

namespace App\Livewire;

use App\Livewire\Forms\PlaygroundForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.playground')]
class Playground extends Component
{
    public PlaygroundForm $form;

    public $popoverOpen = true;

    public function save()
    {
        $this->validate();

        return $this->redirect('/playground');
    }

    public function render()
    {
        return view('livewire.playground');
    }
}
