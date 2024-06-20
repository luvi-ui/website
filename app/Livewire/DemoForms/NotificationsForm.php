<?php

namespace App\Livewire\DemoForms;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.examples-forms')]
class NotificationsForm extends Component
{
    public $noiseAmount = 'all';

    public $emailNotifications = [];

    public $notifications = [
        ['label' => 'All new messages', 'value' => 'all'],
        ['label' => 'Direct messages and mentions', 'value' => 'dmm'],
        ['label' => 'Nothing', 'value' => 'nothing'],
    ];

    public $emails = [
        [
            'label' => 'Communication emails',
            'subline' => 'Receive emails about your account activity.',
            'value' => 'communication',
        ],
        [
            'label' => 'Marketing emails',
            'subline' => 'Receive emails about new products, features, and more.',
            'value' => 'marketing',
        ],
        [
            'label' => 'Social emails',
            'subline' => 'Receive emails for friend requests, follows, and more.',
            'value' => 'social',
        ],
        [
            'label' => 'Security emails',
            'subline' => 'Receive emails about your account activity and security.',
            'value' => 'security',
        ],

    ];

    public function render()
    {
        return view('livewire.demo-forms.notifications-form');
    }
}
