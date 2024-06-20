<x-layout>

    <x-radix::card>
        <x-radix::card.header class="space-y-1">
            <x-radix::card.title class="text-2xl">Create an account</x-radix::card.title>
            <x-radix::card.description>
                Enter your email below to create your account
            </x-radix::card.description>
        </x-radix::card.header>
        <x-radix::card.content class="grid gap-4">
            <div class="grid grid-cols-2 gap-6">
                <x-radix::button variant="outline">GitHub</x-radix::button>
                <x-radix::button variant="outline">Google</x-radix::button>
                <!-- <Button variant="outline"> -->
                <!--     <Icons.gitHub class="mr-2 h-4 w-4" /> -->
                <!--     Github -->
                <!-- </Button> -->
                <!-- <Button variant="outline"> -->
                <!--     <Icons.google class="mr-2 h-4 w-4" /> -->
                <!--     Google -->
                <!-- </Button> -->
            </div>
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <span class="w-full border-t" />
                </div>
                <div class="relative flex justify-center text-xs uppercase">
                    <span class="bg-background px-2 text-muted-foreground">
                        Or continue with
                    </span>
                </div>
            </div>
            <div class="grid gap-2">
                <x-radix::label htmlFor="email">Email</x-radix::label>
                <x-radix::input id="email" type="email" placeholder="m@example.com" />
            </div>
            <div class="grid gap-2">
                <label>password</label>
                <x-radix::input type="text" placeholder="password" />
            </div>
        </x-radix::card.content>
        <x-radix::card.footer>
            <x-radix::button variant="outline" class="w-full">Create account</x-radix::button>
        </x-radix::card.footer>
    </x-radix::card>
</x-layout>
