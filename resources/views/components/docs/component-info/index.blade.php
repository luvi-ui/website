@props([
    'name' => '',
    'description' => '',
])

<div class="space-y-2">
    <h1 class="text-4xl font-bold tracking-tight">
        {{ $name }}
    </h1>
    <p class="text-lg text-muted-foreground">
        {{ $description }}
    </p>
</div>
