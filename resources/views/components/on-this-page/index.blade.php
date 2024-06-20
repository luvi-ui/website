@php
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\File;

    $currentComponent = Str::of(url()->current())->afterLast('/');

    $directory = resource_path("views/docs/{$currentComponent}/examples");

    if (File::exists($directory)) {
        $examples = collect(File::files($directory))->map(function ($component) {
            $componentString = Str::of($component->getFileName())->before('.');

            return (object) [
                'name' => (string) $componentString->after('_'),
                'label' => (string) $componentString->after('_')->replace('-', ' ')->title(),
            ];
        });
    } else {
        $examples = [];
    }
@endphp

<div class="hidden text-sm xl:block space-y-2 sticky top-24 h-[calc(100dvh-7rem)]">

    <div class="relative overflow-hidden h-full">
        <div class="h-full overflow-y-scroll">
            <p class="font-medium">On This Page</p>
            <ul>
                <li class="pt-2">
                    <a
                        href="#installation"
                        class="inline-block no-underline transition-colors hover:text-foreground text-muted-foreground"
                    >Installation</a>
                </li>
                <li class="pt-2">
                    <a
                        href="#usage"
                        class="inline-block no-underline transition-colors hover:text-foreground text-muted-foreground"
                    >Usage</a>
                </li>
                @if ($examples)
                    <li class="pt-2">
                        <a
                            href="#examples"
                            class="inline-block no-underline transition-colors hover:text-foreground text-muted-foreground"
                        >Examples</a>
                        <ul
                            class="pl-4"
                            x-data="{ active: '' }"
                        >
                            @foreach ($examples as $example)
                                <li class="pt-2">
                                    <a
                                        @click="active = '{{ $example->name }}'"
                                        href="#{{ $example->name }}"
                                        class="inline-block no-underline transition-colors hover:text-foreground"
                                        :class="active === '{{ $example->name }}' ? 'text-foreground' : 'text-muted-foreground'"
                                    >{{ $example->label }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
