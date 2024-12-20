<x-layouts.docs>
    <div>
        <x-docs.component-info
            name="Sheet"
            description="Displays a callout for user attention."
        />
        <x-typography.p>Quick note on browser compatibility.</x-typography.p>
        <x-typography.p>This component makes use of two modern CSS features:
            <x-typography.list>
                <li>
                    <x-link
                        href="https://developer.mozilla.org/en-US/docs/Web/CSS/@starting-style">@starting-style</x-link>
                </li>
                <li>
                    <x-link href="https://caniuse.com/?search=allow-discrete">transition-behavior:
                        allow-discrete</x-link>
                </li>
            </x-typography.list>
            Unfortunately both are not (yet) supported in Firefox. The component will still
            work as expected but it will be missing the enter & exit animations.
        </x-typography.p>
        <x-preview name="sheet" />
        <x-installation name="sheet" />
        <x-usage name="sheet" />
        <x-examples name="sheet" />
    </div>
</x-layouts.docs>
