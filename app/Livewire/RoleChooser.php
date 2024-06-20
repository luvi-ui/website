<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\Component;

class RoleChooser extends Component
{
    public $search = '';

    public $roles = [
        [
            'role' => 'Developer',
            'description' => 'Can view, comment and edit.',
        ],
        [
            'role' => 'Viewer',
            'description' => 'Can view and comment.',
        ],
        [
            'role' => 'Billing',
            'description' => 'Can view, comment and manage billing.',
        ],
        [
            'role' => 'Owner',
            'description' => 'Admin-level access to all resources.',
        ],
    ];

    public function render()
    {
        if ($this->search) {
            $filtered = Arr::where($this->roles, fn (array $value, int $key) => Str::substrCount($value['role'], $this->search));
        } else {
            $filtered = $this->roles;
        }

        return view('livewire.role-chooser', [
            'filtered' => $filtered,
        ]);
    }
}
