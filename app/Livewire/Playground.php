<?php

namespace App\Livewire;

use Livewire\Component;

class Playground extends Component
{
    public function foobar()
    {
        dump('hi');
    }

    public function fireToast()
    {
        $this->dispatch('toast-show', duration: 0, slots: ['text' => 'saved', 'action' => 'foobar']);
    }

    public function render()
    {
        return view('livewire.playground');
    }
}
