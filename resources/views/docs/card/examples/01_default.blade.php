@php
    $notifications = [
        (object) [
            'title' => 'Your call has been confirmed.',
            'description' => '1 hour ago',
        ],
        (object) [
            'title' => 'You have a new message!',
            'description' => '1 hour ago',
        ],
        (object) [
            'title' => 'Your subscription is expiring soon!',
            'description' => '2 hours ago',
        ],
    ];
@endphp

<x-card class="w-[380px]">
    <x-card.header>
        <x-card.title>Notifications</x-card.title>
        <x-card.description>You have 3 unread messages.</x-card.description>
    </x-card.header>
    <x-card.content class="grid gap-4">
        <div class=" flex items-center space-x-4 rounded-md border p-4">
            <x-lucide-bell class="size-4" />
            <div class="flex-1 space-y-1">
                <p class="text-sm font-medium leading-none">
                    Push Notifications
                </p>
                <p class="text-sm text-muted-foreground">
                    Send notifications to device.
                </p>
            </div>
            <x-switch />
        </div>
        <div>
            @foreach ($notifications as $notification)
                <div class="mb-4 grid grid-cols-[25px_1fr] items-start pb-4 last:mb-0 last:pb-0">
                    <span class="flex h-2 w-2 translate-y-1 rounded-full bg-sky-500"></span>
                    <div class="space-y-1">
                        <p class="text-sm font-medium leading-none">
                            {{ $notification->title }}
                        </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $notification->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </x-card.content>
    <x-card.footer>
        <x-button class="w-full">
            <x-lucide-check class="mr-2 h-4 w-4" /> Mark all as read
        </x-button>
    </x-card.footer>
</x-card>
