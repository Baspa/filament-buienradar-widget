<?php

namespace Baspa\FilamentBuienradarWidget\Commands;

use Illuminate\Console\Command;

class FilamentBuienradarWidgetCommand extends Command
{
    public $signature = 'filament-buienradar-widget';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
