<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ReportIssue extends Component
{
    #[Validate('required|min:3')]
    public $area = '';

    #[Validate('required|min:3')]
    public $security = '';

    public function save()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.report-issue');
    }
}
