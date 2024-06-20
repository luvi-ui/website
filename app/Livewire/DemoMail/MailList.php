<?php

namespace App\Livewire\DemoMail;

use App\Models\Inbox;
use Livewire\Attributes\Url;
use Livewire\Component;

class MailList extends Component
{
    public Inbox $inbox;

    public ?int $selected;

    #[Url]
    public $search = '';

    #[Url]
    public $filter = 'all';

    public function render()
    {
        return view('livewire.demo-mail.mail-list', [
            'mails' => $this->inbox->mails()
                ->when($this->search, function ($query) {
                    $query->whereAny([
                        'name',
                        'subject',
                        'text',
                    ], 'LIKE', "%{$this->search}%");
                })
                ->when($this->filter !== 'all', function ($query) {
                    $query->where('read', false);
                })
                ->get(),
        ]);
    }
}
