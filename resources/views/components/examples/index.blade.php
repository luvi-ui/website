@php
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Str;

    $directory = resource_path("views/docs/{$name}/examples");
    $examples = collect(File::files($directory))->map(function ($component) {
        $componentString = Str::of($component->getFileName())->before('.');

        return (object) [
            'name' => (string) $componentString->after('_'),
            'label' => (string) $componentString->after('_')->replace('-', ' ')->title(),
            'code' => (string) Str::after($component->getPathName(), 'resources/'),
            'preview' => (string) Str::of($component->getPathName())->after('views/')->before('.blade.php'),
        ];
    });
@endphp

@props([
    'name' => '',
])

<h2 id="examples">Examples</h2>

@foreach ($examples as $example)
    <h3 id="{{ $example->name }}">{{ $example->label }}</h3>
    <x-preview-code
        preview="{{ $example->preview }}"
        code="{{ $example->code }}"
        {{ $attributes->twMerge('') }}
    />
@endforeach
