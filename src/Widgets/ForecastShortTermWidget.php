<?php

namespace Baspa\FilamentBuienradarWidget\Widgets;

use Baspa\Buienradar\Buienradar;
use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class ForecastShortTermWidget extends Widget
{
    public ?array $forecast = null;

    protected static string $view = 'filament-buienradar-widget::widgets.forecast-short-term';

    protected int | string | array $columnSpan = 'full';

    public null | string | array $width = null;

    public function getColumnSpan(): int | string | array
    {
        return $this->width ?? 'full';
    }

    public function render(): View
    {
        $this->columnSpan = $this->width ?? 0;

        return view(static::$view, $this->getViewData());
    }

    public function mount(): void
    {
        $buienradar = new Buienradar;

        $this->forecast = $buienradar->forecast()->shortTerm();
    }
}
