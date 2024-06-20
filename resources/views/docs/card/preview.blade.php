<x-card class="w-[350px]">
    <x-card.header>
        <x-card.title>Create project</x-card.title>
        <x-card.description>Deploy your new project in one-click.</x-card.description>
    </x-card.header>
    <x-card.content>
        <form>
            <div class="grid w-full items-center gap-4">
                <div class="flex flex-col space-y-1.5">
                    <x-label htmlfor="name">Name</x-label>
                    <x-input
                        id="name"
                        placeholder="name of your project"
                    />
                </div>
                <div class="flex flex-col space-y-1.5">
                    <x-label htmlfor="framework">Framework</x-label>
                    <x-select id="framework">
                        <option
                            disabled
                            selected
                            value=""
                        >
                            Select
                        </option>
                        <option value="next">Next.js</option>
                        <option value="sveltekit">SvelteKit</option>
                        <option value="astro">Astro</option>
                        <option value="nuxt">Nuxt.js</option>
                    </x-select>
                </div>
            </div>
        </form>
    </x-card.content>
    <x-card.footer class="flex justify-between">
        <x-button variant="outline">Cancel</x-button>
        <x-button>Deploy</x-button>
    </x-card.footer>
</x-card>
