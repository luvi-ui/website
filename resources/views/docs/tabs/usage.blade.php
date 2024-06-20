<x-tabs
    defaultValue="account"
    class="w-[400px]"
>
    <x-tabs.List>
        <x-tabs.trigger value="account">Account</x-tabs.trigger>
        <x-tabs.trigger value="password">Password</x-tabs.trigger>
    </x-tabs.List>
    <x-tabs.content value="account">Make changes to your account here.</x-tabs.content>
    <x-tabs.content value="password">Change your password here.</x-tabs.content>
</x-tabs>
