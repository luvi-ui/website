@props([
    'name' => '',
])

<h2 id="installation">Installation</h2>

<pre><x-torchlight-code language='shell'>
php artisan vendor:publish --tag={{ $name }} --force
</x-torchlight-code></pre>
