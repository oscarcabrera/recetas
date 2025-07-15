<x-layouts.app.sidebar :title="$title ?? null">
    <div class="flex flex-col min-h-screen">
        {{ $slot }}
    </div>
</x-layouts.app.sidebar>
