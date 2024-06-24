<x-layouts.docs>
    <div>
        <x-docs.component-info
            name="Theming"
            description="Using CSS Variables for theming."
        />
    </div>

    <h2>Heads up</h2>
    <x-typography.p>
        This is a work in progress and right now we only support CSS variables. You can customize these directly in your
        <x-typography.inline-code>laravel-luvi.css</x-typography.inline-code> after publishing them as described
        in the installation guide.
    </x-typography.p>

    <x-typography.p>
        The variables published there will match the "New York" theme from shadcn/ui. The full list of variables can be
        found in the official <x-link href="https://ui.shadcn.com/docs/theming#list-of-variables">shadcn/ui
            documentation</x-link>.
    </x-typography.p>

    <h2>Adding new colors</h2>
    <x-typography.p>
        To add new colors, you need to add them to your CSS file and to your
        <x-typography.inline-code>tailwind.config.js</x-typography.inline-code> file. Here is an example:
        <pre class="mt-6"><x-torchlight-code language='css'>
        /* app.css */
        :root {
            --warning: 38 92% 50%;
            --warning-foreground: 48 96% 89%;
        }

        .dark {
            --warning: 48 96% 89%;
            --warning-foreground: 38 92% 50%;
        }
        </x-torchlight-code></pre>
        <pre class="mt-6"><x-torchlight-code language='json'>
        // tailwind.config.js
        module.exports = {
          theme: {
              extend: {
                  colors: {
                      warning: "hsl(var(--warning))",
                      "warning-foreground": "hsl(var(--warning-foreground))",
                  },
              },
          },
        }
        </x-torchlight-code></pre>
    </x-typography.p>

    <x-typography.p>
        You can now use the warning utility class in your components.
        <pre class="mt-6"><x-torchlight-code language='html'>
            <div class="bg-warning text-warning-foreground">
        </x-torchlight-code></pre>
    </x-typography.p>
</x-layouts.docs>
