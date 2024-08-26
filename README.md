# Filament Buienradar Widget

[![Latest Version on Packagist](https://img.shields.io/packagist/v/baspa/filament-buienradar-widget.svg?style=flat-square)](https://packagist.org/packages/baspa/filament-buienradar-widget)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/baspa/filament-buienradar-widget/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/baspa/filament-buienradar-widget/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/baspa/filament-buienradar-widget/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/baspa/filament-buienradar-widget/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/baspa/filament-buienradar-widget.svg?style=flat-square)](https://packagist.org/packages/baspa/filament-buienradar-widget)

This package provides a Filament widget to show the Dutch forecast from Buienradar.

## Installation

You can install the package via composer:

```bash
composer require baspa/filament-buienradar-widget
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-buienradar-widget-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-buienradar-widget-views"
```

This is the contents of the published config file:

```php
return [
    'station' => MeasuringStation::VOLKEL,
    'show' => [
        'temperature' => true,
        'weather_description' => true,
        'wind_speed' => true,
        'stationname' => true,
        'humidity' => true,
        'last_update' => true,
    ],
];
```

To check what stations are available, you can check the `MeasuringStation` enum in the Buienradar package.

## Usage

Add the widget to your Filament page via your provider:

```php
use Baspa\FilamentBuienradarWidget\Widgets\FilamentBuienradarWidgetPlugin;

// ...

->plugin(FilamentBuienradarWidgetPlugin::make())
```

Or add it to the page directly:

```php
use Baspa\FilamentBuienradarWidget\Widgets\FilamentBuienradarWidgetPlugin;

// ...

BuienrFilamentBuienradarWidgetPluginadarWidget::make()
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Baspa](https://github.com/Baspa)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
