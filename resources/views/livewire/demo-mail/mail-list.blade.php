@php
    function getBadgeVariantFromLabel($label)
    {
        if ($label === 'two') {
            return 'default';
        }

        return 'secondary';
    }
@endphp

<div>
    <div class="flex items-center px-4 py-2">
        <h1 class="text-xl font-bold">Inbox</h1>
        <x-tabs
            wire:model.live="filter"
            name="mail-filter"
            class="ml-auto"
        >
            <x-tabs.list>
                <x-tabs.trigger
                    html-for="all"
                    value="all"
                    :checked="'all' === $filter"
                    id="all"
                >
                    All
                </x-tabs.trigger>
                <x-tabs.trigger
                    html-for="unread"
                    value="unread"
                    :checked="'unread' === $filter"
                    id="unread"
                >
                    Unread
                </x-tabs.trigger>
            </x-tabs.list>
        </x-tabs>
    </div>

    <x-separator />

    <div class="p-4">
        <x-input
            wire:model.live.debounce.200ms="search"
            placeholder="Search"
        />
    </div>

    <div class="flex flex-col gap-2 p-4 pt-0">
        @foreach ($mails as $mail)
            <a
                wire:navigate
                wire:key="{{ $mail->id }}"
                href="{{ route('inbox', compact('inbox', 'mail', 'search', 'filter')) }}"
            >
                <button @class([
                    'flex flex-col items-start gap-2 rounded-lg border p-3 text-left text-sm transition-all hover:bg-accent',
                    'bg-accent' => $selected === $mail->id,
                ])>
                    <div class="flex w-full flex-col gap-1">
                        <div class="flex items-center">
                            <div class="flex items-center gap-2">
                                <div class="font-semibold">
                                    {{ $mail->name }}
                                </div>
                                @if (!$mail->read)
                                    <span class="flex h-2 w-2 rounded-full bg-blue-600" />
                                @endif
                            </div>
                            <div class="ml-auto text-xs text-muted-foreground">
                                {{ $mail->date }}
                            </div>
                        </div>
                        <div class="text-xs font-medium">
                            {{ $mail->subject }}
                        </div>
                    </div>
                    <div class="line-clamp-2 text-xs text-muted-foreground">
                        @php echo Str::take($mail->text, 300); @endphp
                    </div>
                    @if ($mail->labels->isNotEmpty())
                        <div class="flex items-center gap-2">
                            @foreach ($mail->labels as $label)
                                <x-badge :variant="getBadgeVariantFromLabel($label)">
                                    {{ $label }}
                                </x-badge>
                            @endforeach
                        </div>
                    @endif
                </button>
            </a>
        @endforeach

    </div>

</div>
