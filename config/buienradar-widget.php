<?php

use Baspa\Buienradar\Enum\MeasuringStation;

return [
    // The station to show the forecast for
    'station' => MeasuringStation::VOLKEL,

    // Whether to show the temperature, weather description, wind speed, wind direction, humidity and last update
    'show' => [
        'temperature' => true,
        'weather_description' => true,
        'wind_speed' => true,
        'stationname' => true,
        'humidity' => true,
        'last_update' => true,
    ],
];
