<x-tabs
    defaultValue="account"
    class="w-[400px]"
>
    <x-tabs.list class="grid w-full grid-cols-2">
        <x-tabs.trigger value="account">
            Account
        </x-tabs.trigger>
        <x-tabs.trigger value="password">
            Password
        </x-tabs.trigger>
    </x-tabs.list>
    <x-tabs.content value="account">
        <x-card>
            <x-card.header>
                <x-card.title>Account</x-card.title>
                <x-card.description>
                    Make changes to your account here. Click save when you're done.
                </x-card.description>
            </x-card.header>
            <x-card.content class="space-y-2">
                <div class="space-y-1">
                    <x-label htmlfor="name">Name</x-label>
                    <x-input
                        id="name"
                        value="pedro duarte"
                    />
                </div>
                <div class="space-y-1">
                    <x-label htmlfor="username">Username</x-label>
                    <x-input
                        id="username"
                        value="@peduarte"
                    />
                </div>
            </x-card.content>
            <x-card.footer>
                <x-button>Save changes</x-button>
            </x-card.footer>
        </x-card>
    </x-tabs.content>
    <x-tabs.content value="password">
        <x-card>
            <x-card.header>
                <x-card.title>Password</x-card.title>
                <x-card.description>
                    Change your password here. After saving, you'll be logged out.
                </x-card.description>
            </x-card.header>
            <x-card.content class="space-y-2">
                <div class="space-y-1">
                    <x-label htmlfor="current">Current password</x-label>
                    <x-input
                        id="current"
                        type="password"
                    />
                </div>
                <div class="space-y-1">
                    <x-label htmlfor="new">New password</x-label>
                    <x-input
                        id="new"
                        type="password"
                    />
                </div>
            </x-card.content>
            <x-card.footer>
                <x-button>Save password</x-button>
            </x-card.footer>
        </x-card>
    </x-tabs.content>
</x-tabs>
