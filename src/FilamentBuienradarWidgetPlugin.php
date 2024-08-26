<?php

namespace Baspa\FilamentBuienradarWidget;

use Filament\Panel;
use Filament\Contracts\Plugin;
use Baspa\FilamentBuienradarWidget\Widgets\BuienradarWidget;

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
                BuienradarWidget::class,
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