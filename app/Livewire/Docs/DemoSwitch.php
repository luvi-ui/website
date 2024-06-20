<?php

namespace App\Livewire\Docs;

use Livewire\Component;

class DemoSwitch extends Component
{
    public $emailNotifications = [];

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
        return <<<'HTML'
        <x-form>
            <div>
                <div
                    x-data="{
                        showMe: [],
                        addIfMissing(newItem) {
                            const index = this.showMe.indexOf(newItem);
                            return index === -1 ? this.showMe.push(newItem) : this.showMe.splice(index, 1);
                        }
                    }"
                    class="mt-8 space-y-4"
                    @input="addIfMissing($event.target.dataset.label)"
                >
                    @foreach ($emails as $email)
                        <x-card>
                            <x-card.header>
                                <div class="flex justify-between">
                                    <label for="{{ $email['value'] }}">
                                        <x-card.title>
                                            {{ $email['label'] }}
                                        </x-card.title>
                                        <x-card.description>
                                            {{ $email['subline'] }}
                                        </x-card.description>
                                    </label>
                                    <div>
                                        <x-switch
                                            name="emails"
                                            id="{{ $email['value'] }}"
                                            value="{{ $email['value'] }}"
                                            data-label="{{ $email['label'] }}"
                                            x-model="$wire.emailNotifications"
                                        />
                                    </div>
                                </div>
                            </x-card.header>
                        </x-card>
                    @endforeach
                </div>
            </div>
        </x-form>
        HTML;
    }
}
