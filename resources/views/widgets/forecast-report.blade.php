<x-filament-widgets::widget>
    <x-filament::section>
        <div class="p-4 space-y-4">
            @if ($forecast)
                <h2 class="text-2xl font-bold">{{ $forecast['title'] }}</h2>
                <p class="text-sm text-gray-500">Published:
                    {{ \Carbon\Carbon::parse($forecast['published'])->format('d M Y, H:i') }}</p>
                <p class="text-lg font-semibold">{{ $forecast['summary'] }}</p>
                <div class="prose max-w-none">
                    {!! nl2br(new Illuminate\Support\HtmlString($forecast['text'])) !!}
                </div>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="font-semibold">{{ $forecast['author'] }}</p>
                    <p class="text-sm text-gray-600">{{ $forecast['authorbio'] }}</p>
                </div>
            @else
                <p>No forecast report available.</p>
            @endif
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
