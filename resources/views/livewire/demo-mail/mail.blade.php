@php
    $links = [
        [
            'title' => 'Inbox',
            'label' => '128',
            'icon' => 'inbox',
            'variant' => 'default',
        ],
        [
            'title' => 'Drafts',
            'label' => '9',
            'icon' => 'file',
            'variant' => 'ghost',
        ],
        [
            'title' => 'Sent',
            'label' => '',
            'icon' => 'send',
            'variant' => 'ghost',
        ],
        [
            'title' => 'Junk',
            'label' => '23',
            'icon' => 'archive',
            'variant' => 'ghost',
        ],
        [
            'title' => 'Trash',
            'label' => '',
            'icon' => 'trash-2',
            'variant' => 'ghost',
        ],
        [
            'title' => 'Archive',
            'label' => '',
            'icon' => 'archive',
            'variant' => 'ghost',
        ],
    ];
@endphp

<div>
    <div class="grid grid-cols-12 rounded-lg">
        <div class="hidden lg:block col-span-2">
            <div class="p-4">
                <x-select
                    x-on:change="Livewire.navigate(`/examples/mail/${$event.target.value}/`)"
                    wire:model="current"
                >
                    <option value="1">alicia@example.com</option>
                    <option value="2">alicia@proton.me</option>
                    <option value="3">alicia@me.com</option>
                </x-select>
            </div>

            <div class="border-t">
                <x-demo.mail.nav :links="$links" />
            </div>
        </div>

        <div class="col-span-full lg:col-span-3 border-l">
            <livewire:demo-mail.mail-list
                :inbox="$inbox"
                :selected="$mail?->id"
            />
        </div>

        <div class="col-span-full lg:col-span-7 border-l">
            @if ($mail)
                <x-demo.mail.display :mail="$mail" />
            @else
                <div class="grid h-full place-content-center">
                    <div class="flex flex-col items-center">
                        <x-lucide-mail class="size-24 text-gray-400" />
                        <p>Select a message</p>
                    </div>
                </div>
            @endif
        </div>
    </div>

</div>
