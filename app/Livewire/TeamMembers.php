<?php

namespace App\Livewire;

use App\Models\TeamMember;
use Livewire\Component;

class TeamMembers extends Component
{
    public function render()
    {
        return view('livewire.team-members', [
            'members' => TeamMember::all(),
        ]);
    }
}
