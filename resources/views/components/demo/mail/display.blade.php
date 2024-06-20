@props([
    'mail' => '',
])

<div class="flex h-full flex-col">
    <div class="flex items-center p-2">
        <div class="flex items-center gap-2">
            <x-button
                variant="ghost"
                size="icon"
            >
                <x-lucide-archive class="h-4 w-4" />
                <span class="sr-only">Archive</span>
            </x-Button>
            <x-button
                variant="ghost"
                size="icon"
            >
                <x-lucide-archive class="h-4 w-4" />
                <span class="sr-only">Move to junk</span>
            </x-button>
            <x-button
                variant="ghost"
                size="icon"
            >
                <x-lucide-trash-2 class="h-4 w-4" />
                <span class="sr-only">Move to trash</span>
            </x-button>
            <x-separator
                orientation="vertical"
                class="mx-1 h-6"
            />
            <x-button
                variant="ghost"
                size="icon"
            >
                <x-lucide-clock class="h-4 w-4" />
                <span class="sr-only">Move to trash</span>
            </x-button>
        </div>
        <div class="ml-auto flex items-center gap-2">
            <x-button
                variant="ghost"
                size="icon"
            >
                <x-lucide-reply class="h-4 w-4" />
                <span class="sr-only">Reply</span>
            </x-button>
            <x-button
                variant="ghost"
                size="icon"
            >
                <x-lucide-reply-all class="h-4 w-4" />
                <span class="sr-only">Reply all</span>
            </x-button>
            <x-button
                variant="ghost"
                size="icon"
            >
                <x-lucide-forward class="h-4 w-4" />
                <span class="sr-only">Forward</span>
            </x-button>
        </div>
        <x-separator
            orientation="vertical"
            class="mx-2 h-6"
        />

        <x-popover>
            <x-popover.trigger>
                <x-button
                    variant="ghost"
                    size="icon"
                >
                    <x-lucide-more-vertical class="h-4 w-4" />
                    <span class="sr-only">More</span>
                </x-button>
            </x-popover.trigger>
            <x-popover.content>
                <div
                    class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                    Mark as unread
                </div>
                <div
                    class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                    Star thread
                </div>
                <div
                    class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                    Add label
                </div>
                <div
                    class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                    Mute thread
                </div>
            </x-popover.content>
        </x-popover>
    </div>
    <x-separator />
    <div class="flex flex-1 flex-col">
        <div class="flex items-start p-4">
            <div class="flex items-start gap-4 text-sm">
                <x-avatar>
                    <x-avatar.fallback>
                        {{ \Illuminate\Support\Str::initials($mail->name) }}
                    </x-avatar.fallback>
                </x-avatar>
                <div class="grid gap-1">
                    <div class="font-semibold">{{ $mail->name }}</div>
                    <div class="line-clamp-1 text-xs">{{ $mail->subject }}</div>
                    <div class="line-clamp-1 text-xs">
                        <span class="font-medium">Reply-To:</span> {{ $mail->email }}
                    </div>
                </div>
            </div>
            @if ($mail->date)
                <div class="ml-auto text-xs text-muted-foreground">
                    {{ $mail->date }}
                </div>
            @endif
        </div>
        <x-separator />
        <div class="flex-1 whitespace-pre-wrap p-4 text-sm">
            {{ $mail->text }}
        </div>
        <x-separator class="mt-auto" />
        <div class="p-4">
            <form>
                <div class="grid gap-4">
                    <x-textarea
                        class="p-4"
                        placeholder="Reply {{ $mail->name }}..."
                    />
                    <div class="flex items-center">
                        <x-label
                            htmlFor="mute"
                            class="flex items-center gap-2 text-xs font-normal"
                        >
                            <x-switch
                                id="mute"
                                aria-label="Mute thread"
                            /> Mute this thread
                        </x-label>
                        <x-button
                            type="submit"
                            size="sm"
                            class="ml-auto"
                        >
                            Send
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
