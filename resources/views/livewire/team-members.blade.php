<x-card>
    <x-card.header>
        <x-card.title>Team Members</x-card.title>
        <x-card.description>
            Invite your team members to collaborate.
        </x-card.description>
    </x-card.header>
    <x-card.content class="grid gap-6">
        @foreach ($members as $member)
            <livewire:team-member-row
                :key="$member->id"
                :$member
            />
        @endforeach
    </x-card.content>
</x-card>
