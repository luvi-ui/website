<x-layouts.docs>
    <div>
        <x-docs.component-info
            name="Installation"
            description="How to install dependencies and structure your app."
        />

        <x-typography.h2>
            Components
        </x-typography.h2>

        <x-typography.p>
            You can install this package via composer:
            <pre class="mt-6"><x-torchlight-code language='shell'>
                    composer require luvi-ui/laravel-luvi
                </x-torchlight-code></pre>
        </x-typography.p>

        <x-typography.p>
            Once installed you can publish individual components by running:
            <pre class="mt-6"><x-torchlight-code language='shell'>
                    php artisan vendor:publish --tag=component-name --force
                </x-torchlight-code></pre>
        </x-typography.p>

        <x-typography.p>
            Where you replace <x-typography.inline-code>component-name</x-typography.inline-code> with the name of the
            component you want to publish. For example:
            <pre class="mt-6"><x-torchlight-code language='shell'>
                    php artisan vendor:publish --tag=alert --force
                </x-torchlight-code></pre>
        </x-typography.p>

        <x-typography.p>
            This will copy the component to
            your<x-typography.inline-code>resources/views/components</x-typography.inline-code> folder.
        </x-typography.p>

        <h2>Prerequisites</h2>
        <x-typography.p>
            For Luvi UI to work you need to have the following dependencies installed:
            <x-typography.list>
                <li>Laravel</li>
                <li>Tailwind CSS</li>
                <li>Livewire or Alpine.js</li>
            </x-typography.list>

            Luvi UI is going to publish Blade components you can use in your existing projects. Some of these
            components require <x-link href="https://alpinejs.dev/">Alpine.js</x-link> in order to work. Livewire comes
            already bundled with Alpine.js or you can install Alpine.js
            independently.

            For either case we have configuration steps in the following sections.
        </x-typography.p>

        <h2>Livewire</h2>
        <x-typography.p>
            You can install Livewire as described in the installation guide <x-link
                href="https://livewire.laravel.com/docs/installation"
            >here</x-link>. Ensure that Livewire injects its Javascript on your page as described in the docs.

            You also need to install the following plugins:
            <pre class="mt-6"><x-torchlight-code language='shell'>
                    npm install @alpinejs/anchor @alpinejs/collapse
                </x-torchlight-code></pre>
        </x-typography.p>

        <x-typography.p>
            Some components require JavaScript to work. You can add the necessary JavaScript to your
            <x-typography.inline-code>app.js</x-typography.inline-code> file:

            <pre class="mt-6"><x-torchlight-code language='javascript'>
                    import collapse from "@alpinejs/collapse";
                    import anchor from "@alpinejs/anchor";

                    document.addEventListener(
                        "alpine:init",
                        () => {
                            const modules = import.meta.glob("./plugins/**/*.js", { eager: true });

                            for (const path in modules) {
                                window.Alpine.plugin(modules[path].default);
                            }
                            window.Alpine.plugin(collapse);
                            window.Alpine.plugin(anchor);
                        },
                        { once: true },
                    );
                </x-torchlight-code></pre>
        </x-typography.p>

        <h2>Alpine</h2>
        <x-typography.p>
            You can install Alpine.js as described in the Alpine.js installation guide <x-link
                href="https://alpinejs.dev"
            >here</x-link>. You need to install the following plugins:

            <pre class="mt-6"><x-torchlight-code language='shell'>
                    npm install @alpinejs/anchor @alpinejs/collapse
                </x-torchlight-code></pre>
        </x-typography.p>


        <x-typography.p>
            Some components require JavaScript to work. You can add the necessary JavaScript to your
            <x-typography.inline-code>app.js</x-typography.inline-code> file:

            <pre class="mt-6"><x-torchlight-code language='javascript'>
            import Alpine from "alpinejs";
            import anchor from "@alpinejs/anchor";
            import collapse from "@alpinejs/collapse";

            Alpine.plugin(anchor);
            Alpine.plugin(collapse);

            const modules = import.meta.glob("./plugins/**/*.js", { eager: true });

            for (const path in modules) {
                Alpine.plugin(modules[path].default);
            }

            Alpine.start();
        </x-torchlight-code></pre>
        </x-typography.p>



        <h2>Tailwind CSS</h2>
        <x-typography.p>
            If you don't have Tailwind CSS installed in your project you can install it as described in the Tailwind CSS
            framework installation guide
            <x-link href="https://tailwindcss.com/docs/guides/laravel">here</x-link>.

            <x-typography.p>
                You also need the following plugins:

                <pre class="mt-6"><x-torchlight-code language='shell'>
                    npm install -D @tailwindcss/forms tailwindcss-animate
                </x-torchlight-code></pre>
            </x-typography.p>
        </x-typography.p>

        <x-typography.p>
            To style your components as shown in our examples, you need to publish the Tailwind config and the bundle's
            CSS file. Please note: Publishing
            <x-typography.inline-code>tailwind.config.js</x-typography.inline-code> will override this file if it is
            already present in your project. If you have made changes to this file, make sure to back them up and then
            run:
            <pre class="mt-6"><x-torchlight-code language='shell'>
                    php artisan vendor:publish --tag=tailwind --force
                    php artisan vendor:publish --tag=css --force
                </x-torchlight-code></pre>
        </x-typography.p>

        <x-typography.p>
            Make sure you load the published stylesheet in your main template:
            <pre class="mt-6"><x-torchlight-code language='blade'>
                @@vite(['resources/css/luvi-ui.css', 'resources/css/app.css', 'resources/js/app.js'])
            </x-torchlight-code></pre>
        </x-typography.p>

        <x-typography.p>
            When you bundle your app for production, make sure
            <x-typography.inline-code>luvi-ui.css</x-typography.inline-code> is included in your
            <x-typography.inline-code>vite.config.js</x-typography.inline-code>:
            <pre class="mt-6"><x-torchlight-code language='javascript'>
                plugins: [
                    laravel({
                        input: [
                            "resources/css/app.css",
                            "resources/css/luvi-ui.css", // [tl! add]
                            "resources/js/app.js",
                        ],
                        refresh: true,
                    }),
                ],
            </x-torchlight-code></pre>
        </x-typography.p>

        <h2>Icons</h2>
        <x-typography.p>
            If you would like to have the same look and feel as seen in the examples, you need to install the <x-link
                href="https://github.com/mallardduck/blade-lucide-icons/"
            >Lucide</x-link>
            icon set:
            <pre class="mt-6"><x-torchlight-code language='shell'>
                    composer require mallardduck/blade-lucide-icons
                </x-torchlight-code></pre>
        </x-typography.p>
    </div>
</x-layouts.docs>
