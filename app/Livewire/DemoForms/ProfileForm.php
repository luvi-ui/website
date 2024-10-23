<?php

namespace App\Livewire\DemoForms;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.examples-forms')]
class ProfileForm extends Component
{
    #[Validate('required|min:3')]
    public $notification = '';

    public $bio = 'I own a computer.';

    public $urls = [
        ['value' => 'https://shadcn.com'],
        ['value' => 'http://twitter.com/shadcn'],
    ];

    public function append()
    {
        $this->urls[] = ['value' => ''];
    }

    public function render()
    {
        return <<<'HTML'
            <div>
                <x-form>
                    <x-form.input
                        wire:model="display"
                        placeholder="shadcn"
                        description-trailing="This is your public display name. It can be your real name or a pseudonym. You can only change this once every 30 days."
                    />
                    <x-form.item>
                        <x-form.label>Email</x-form.label>
                        <x-select x-form:control >
                            <option value="Select a verified email to display" disabled>
                                Select a verified email to display </option>
                            <option value="m@example.com">m@example.com</option>
                            <option value="m@google.com">m@google.com</option>
                            <option value="m@support.com">m@support.com</option>
                        </x-select>
                        <x-form.description>
                            You can manage verified email addresses in your
                            <x-link href="/examples/forms">email settings</x-link>.
                        </x-form.description>
                        <x-form.message />
                    </x-form.item>

                    <x-form.item>
                        <x-form.label>Bio</x-form.label>
                        <x-textarea
                            wire:model="bio"
                            x-form:control
                            placeholder="Tell us a little bit about yourself"
                            class="resize-none"
                        />
                        <x-form.description>
                            You can <span>@mention</span> other users and organizations to
                            link to them.
                        </x-form.description>
                        <x-form.message />
                    </x-form.item>

                    <div>
                        @foreach($urls as $index => $url)
                        <x-form.item>
                            <x-form.label
                                @class([
                                "sr-only" => $index !== 0,
                                ])
                            >
                                URLs
                            </x-form.label>
                            <x-form.description @class([
                                "sr-only" => $index !== 0,
                                ])>
                                Add links to your website, blog, or social media profiles.
                            </x-form.description>
                            <x-input x-form:control value="{{ $url['value'] }}"/>
                            <x-form.message />
                        </x-form.item>
                        @endforeach
                        <x-button
                            variant="outline"
                            size="sm"
                            class="mt-2"
                            wire:click="append"
                        >
                            Add URL
                        </x-button>
                    </div>
                    <x-button type="submit">Update profile</x-button>
                </x-form>
            </div>
        HTML;

    }
}
