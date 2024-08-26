<x-filament-widgets::widget>
    <x-filament::section class="h-full">
        <div class="p-4 overflow-hidden text-center">
            @if ($forecast)
                <img src="{{ $forecast['fullIconUrl'] }}" alt="{{ $forecast['weatherdescription'] }}"
                    class="w-16 mx-auto -m-3">
                @if (config('buienradar-widget.show.temperature'))
                    <span class="text-2xl sm:text-3xl">{{ round($forecast['temperature']) }}&#x2103;</span><br>
                @endif
                @if (config('buienradar-widget.show.weather_description'))
                    <p class="mt-1 text-sm text-gray-400">
                        {{ $forecast['weatherdescription'] }}
                    </p>
                    @if (config('buienradar-widget.show.stationname'))
                        <p class="mt-1 text-sm">
                            {{ $forecast['stationname'] }}
                        </p>
                    @endif
                    @if (config('buienradar-widget.show.wind_speed'))
                        <p class="mt-1 text-xs text-gray-400">
                            Wind: {{ $forecast['windspeedBft'] }} Bft {{ $forecast['winddirection'] }}
                        </p>
                    @endif
                    @if (config('buienradar-widget.show.humidity'))
                        <p class="mt-1 text-xs text-gray-400">
                            Luchtvochtigheid: {{ $forecast['humidity'] }}%
                        </p>
                    @endif
                    @if (config('buienradar-widget.show.last_update'))
                        <p class="mt-1 text-xs text-gray-400">
                            Laatste update: {{ \Carbon\Carbon::parse($forecast['timestamp'])->format('H:i') }}
                        </p>
                    @endif
                @else
                    <p>No forecast data available.</p>
                @endif
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
