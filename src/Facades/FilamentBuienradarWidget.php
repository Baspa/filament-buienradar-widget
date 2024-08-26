<?php

namespace Baspa\FilamentBuienradarWidget\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Baspa\FilamentBuienradarWidget\FilamentBuienradarWidget
 */
class FilamentBuienradarWidget extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Baspa\FilamentBuienradarWidget\FilamentBuienradarWidget::class;
    }
}
