<x-form class="w-2/3 space-y-6">
    <div class="space-y-2">
        <x-form.label>Bio</x-form.label>
        <x-textarea
            placeholder="Tell us a little bit about yourself"
            class="resize-none"
        />
        <x-form.description>
            You can <span>@mention</span> other users and organizations.
        </x-form.description>
    </div>
    <x-button type="submit">Update profile</x-button>
</x-form>
