<x-sheet>
    <x-sheet.trigger>
        <x-button variant="outline">
            Open
        </x-button>
    </x-sheet.trigger>
    <x-sheet.content>
        <x-sheet.header>
            <x-sheet.title>Edit profile</x-sheet.title>
            <x-sheet.description>
                Make changes to your profile here. Click save when you're done.
            </x-sheet.description>
        </x-sheet.header>
        <x-sheet.main class="overflow-y-auto"> {{-- [tl! highlight] --}}
            <div class="grid gap-4 py-4">
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-label
                        htmlFor="name"
                        class="text-right"
                    >
                        Name
                    </x-label>
                    <x-input
                        id="name"
                        value="pedro duarte"
                        class="col-span-3"
                    />
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-label
                        htmlFor="username"
                        class="text-right"
                    >
                        Username
                    </x-label>
                    <x-input
                        id="username"
                        value="@peduarte"
                        class="col-span-3"
                    />
                </div>
            </div>
            <div class="space-y-4">
                <p>
                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </x-sheet.main>
        <x-sheet.footer>
            <x-sheet.close type="submit">
                Save changes
            </x-sheet.close>
        </x-sheet.footer>
    </x-sheet.content>
</x-sheet>
