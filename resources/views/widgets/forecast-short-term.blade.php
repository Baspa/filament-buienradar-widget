<x-filament-widgets::widget>
    <x-filament::section>
        <div class="p-4 space-y-4">
            @if ($forecast)
                <h2 class="text-xl font-bold">{{ __('Short-Term Forecast') }}</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span>{{ __('From') }}:
                        {{ \Carbon\Carbon::parse($forecast['startdate'])->format('d M Y') }}</span>
                    <span>{{ __('To') }}: {{ \Carbon\Carbon::parse($forecast['enddate'])->format('d M Y') }}</span>
                </div>
                <div class="prose max-w-none">
                    {!! nl2br(new Illuminate\Support\HtmlString($forecast['forecast'])) !!}
                </div>
            @else
                <p>{{ __('No short-term forecast available.') }}</p>
            @endif
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
