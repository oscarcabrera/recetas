@props([
    'title',
    'description',
])

<div class="flex w-full flex-col text-center">
    <h1 class="text-3xl font-bold text-base-content mb-2">{{ $title }}</h1>
    <p class="text-base-content/70 text-lg">{{ $description }}</p>
</div>
