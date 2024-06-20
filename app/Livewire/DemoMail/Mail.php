<?php

namespace App\Livewire\DemoMail;

use App\Models\DemoMail;
use App\Models\Inbox;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.examples')]
class Mail extends Component
{
    public Inbox $inbox;

    public $current = null;

    public DemoMail $mail;

    public function mount()
    {
        // HACK: quick fix for landing page
        if (isset($this->inbox)) {
            return $this->current = $this->inbox->id;
        }

        $this->inbox = Inbox::first();

    }

    public function render()
    {
        return view('livewire.demo-mail.mail');
    }
}
