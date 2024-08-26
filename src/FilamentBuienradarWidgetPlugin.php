<?php

namespace Baspa\FilamentBuienradarWidget;

use Filament\Panel;
use Filament\Contracts\Plugin;
use Baspa\FilamentBuienradarWidget\Widgets\ForecastReportWidget;
use Baspa\FilamentBuienradarWidget\Widgets\ForecastLongTermWidget;
use Baspa\FilamentBuienradarWidget\Widgets\ForecastShortTermWidget;
use Baspa\FilamentBuienradarWidget\Widgets\ForecastForStationWidget;

class FilamentBuienradarWidgetPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-buienradar-widget';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->widgets([
                ForecastForStationWidget::class,
                ForecastReportWidget::class,
                ForecastShortTermWidget::class,
                ForecastLongTermWidget::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}