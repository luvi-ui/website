<?php

namespace App\Livewire;

use Livewire\Component;

class TeamMemberRow extends Component
{
    public $member;

    public $role;

    public function mount()
    {
        $this->role = $this->member->role;
    }

    public function update()
    {
        $this->member->update([
            'role' => $this->role,
        ]);
    }

    public function render()
    {
        return view('livewire.team-member-row');
    }
}
