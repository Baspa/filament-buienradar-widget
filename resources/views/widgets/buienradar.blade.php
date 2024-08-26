<x-filament-widgets::widget>
    <x-filament::section class="h-full">
        <div class="p-4 overflow-hidden text-center">
            @if ($forecast)
                <img src="{{ $forecast['fullIconUrl'] }}" alt="{{ $forecast['weatherdescription'] }}"
                    class="w-16 mx-auto -m-3">
                <span class="text-2xl sm:text-3xl">{{ round($forecast['temperature']) }}&#x2103;</span><br>
                <p class="mt-1 text-sm text-gray-400">
                    {{ $forecast['weatherdescription'] }}
                </p>
                <p class="mt-1 text-sm">
                    {{ $forecast['stationname'] }}
                </p>
                <p class="mt-1 text-xs text-gray-400">
                    Wind: {{ $forecast['windspeedBft'] }} Bft {{ $forecast['winddirection'] }}
                </p>
                <p class="mt-1 text-xs text-gray-400">
                    Luchtvochtigheid: {{ $forecast['humidity'] }}%
                </p>
                <p class="mt-1 text-xs text-gray-400">
                    Laatste update: {{ \Carbon\Carbon::parse($forecast['timestamp'])->format('H:i') }}
                </p>
            @else
                <p>No forecast data available.</p>
            @endif
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
