<?php

namespace App\Livewire;

use Livewire\Component;

class Playground extends Component
{
    public function mount()
    {
        // session()->pull('toasts');
        // session()->flash('toasts', [
        //     [
        //         'duration' => 0,
        //         'slots' => ['text' => 'saved', 'action' => 'foobar'],
        //     ],
        // ]);
    }

    public function foobar()
    {
        dump('hi');
    }

    public function fireToast()
    {
        $this->dispatch('toast-show', duration: 0, slots: [
            'title' => 'Saved',
            'description' => 'Friday, February 10, 2023 at 5:57 PM',
            'action' => 'foobar',
        ]);
    }

    public function render()
    {
        return view('livewire.playground');
    }
}
