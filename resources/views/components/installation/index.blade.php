@props([
    'name' => '',
])

<h2 id="installation">Installation</h2>

<div class="relative">
    <x-copy-to-clipboard variant="ghost" class="top-3 text-white" code="php artisan vendor:publish --tag={{ $name }} --force" />

    <pre><x-torchlight-code language='shell'>
    php artisan vendor:publish --tag={{ $name }} --force
    </x-torchlight-code></pre>
</div>
