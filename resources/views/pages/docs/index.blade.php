<x-layouts.docs>
    <div>
        <x-docs.component-info
            name="Introduction"
            description="Beautifully designed components that you can copy and paste into your apps. Accessible. Customizable. Open Source."
        />
        <h2>A word of caution</h2>
        <x-typography.p>
            This project is still a work in progress and does not yet provide all the components that shadcn itself
            offers. We do our best to approach feature parity but it's a long way. To accelerate this goal <a
                href="https://github.com/luvi-ui/laravel-luvi"
                class="font-medium underline underline-offset-4"
            >pull requests</a>
            are welcome.
        </x-typography.p>

        <h2>What's up with the name?</h2>
        <x-typography.p>
            In German, "Luv" means windward and since this projects uses Tailwind CSS we thought we stay within the wind
            analogies. The "i" is simply borrowed from UI.
        </x-typography.p>

        <h2>What is this?</h2>
        <x-typography.p>
            An unofficial Laravel port of shadcn/ui. This project was created to address the need for a similar tool
            within the Laravel ecosystem.
        </x-typography.p>

        <x-typography.p>
            This is <strong>NOT</strong> a component library. It's a collection of re-usable
            components that you can
            copy and
            paste or use
            the CLI to add to your apps.
        </x-typography.p>

        <x-typography.p>
            <strong>What do you mean not a component library?</strong>
        </x-typography.p>

        <x-typography.p>
            Pick the components you need. Use the CLI to automatically add the components, or copy and paste the code
            into your project and customize to your needs. The code is yours.
        </x-typography.p>

        <x-typography.p>
            <em>Use this as a reference to build your own component libraries.</em>
        </x-typography.p>

        <div class="dirty-reset">
            <h2>FAQ</h2>
            <x-accordion type="multiple">
                <x-accordion.item value="faq-1">
                    <x-accordion.trigger>
                        Why copy/paste and not packaged as a dependency?
                    </x-accordion.trigger>
                    <x-accordion.content>
                        <x-typography.p>
                            The idea behind this is to give you ownership and control over the code, allowing you to
                            decide how the components are built and styled.
                        </x-typography.p>

                        <x-typography.p>
                            Start with some sensible defaults, then customize the components to your needs.
                        </x-typography.p>

                        <x-typography.p>
                            One of the drawbacks of packaging the components in an npm package is that the style is
                            coupled with the implementation.
                            <em>The design of your components should be separate from their implementation.</em>
                        </x-typography.p>

                    </x-accordion.content>
                </x-accordion.item>

                <x-accordion.item value="faq-2">
                    <x-accordion.trigger>
                        Do you plan to publish it as an npm package?
                    </x-accordion.trigger>
                    <x-accordion.content>
                        No, we have no plans to publish it as an npm package.
                    </x-accordion.content>
                </x-accordion.item>

                <x-accordion.item value="faq-3">
                    <x-accordion.trigger>
                        Which frameworks are supported?
                    </x-accordion.trigger>
                    <x-accordion.content>
                        You can use it only with the <a
                            href="https://laravel.com/"
                            class="font-medium underline underline-offset-4"
                        >Laravel</a> framework.
                    </x-accordion.content>
                </x-accordion.item>

                <x-accordion.item value="faq-4">
                    <x-accordion.trigger>
                        Can I use this in my project?
                    </x-accordion.trigger>
                    <x-accordion.content>
                        Yes. Free to use for personal and commercial projects. No attribution required.
                    </x-accordion.content>
                    <x-accordion.content>
                        But hey, let us know if you do. We'd love to see what you build.
                    </x-accordion.content>
                </x-accordion.item>
            </x-accordion>
        </div>
    </div>
</x-layouts.docs>
