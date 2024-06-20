@props([
    'name' => '',
])

<x-preview-code
    preview="docs/{{ $name }}/preview"
    code="views/docs/{{ $name }}/preview.blade.php"
/>
