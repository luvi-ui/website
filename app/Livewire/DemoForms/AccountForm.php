<?php

namespace App\Livewire\DemoForms;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.examples-forms')]
class AccountForm extends Component
{
    public $language = 'en';

    public $languages = [
        ['label' => 'English', 'value' => 'en'],
        ['label' => 'French', 'value' => 'fr'],
        ['label' => 'German', 'value' => 'de'],
        ['label' => 'Spanish', 'value' => 'es'],
        ['label' => 'Portuguese', 'value' => 'pt'],
        ['label' => 'Russian', 'value' => 'ru'],
        ['label' => 'Japanese', 'value' => 'ja'],
        ['label' => 'Korean', 'value' => 'ko'],
        ['label' => 'Chinese', 'value' => 'zh'],
    ];

    public function render()
    {
        return view('livewire.demo-forms.account-form');
    }
}
