<?php

namespace Baspa\FilamentBuienradarWidget;

use Baspa\FilamentBuienradarWidget\Commands\FilamentBuienradarWidgetCommand;
use Baspa\FilamentBuienradarWidget\Testing\TestsFilamentBuienradarWidget;
use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentBuienradarWidgetServiceProvider extends PackageServiceProvider
{
    public static string $name = 'buienradar-widget';

    public static string $viewNamespace = 'filament-buienradar-widget';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('baspa/filament-buienradar-widget');
            });

        $configFileName = $package->shortName();
        $configFileName = 'buienradar-widget';

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );

        // Icon Registration
        FilamentIcon::register($this->getIcons());

        // Handle Stubs
        if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__ . '/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/filament-buienradar-widget/{$file->getFilename()}"),
                ], 'filament-buienradar-widget-stubs');
            }
        }

        // Testing
        Testable::mixin(new TestsFilamentBuienradarWidget);
    }

    protected function getAssetPackageName(): ?string
    {
        return 'baspa/filament-buienradar-widget';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('filament-buienradar-widget', __DIR__ . '/../resources/dist/components/filament-buienradar-widget.js'),
            Css::make('filament-buienradar-widget-styles', __DIR__ . '/../resources/dist/filament-buienradar-widget.css'),
            Js::make('filament-buienradar-widget-scripts', __DIR__ . '/../resources/dist/filament-buienradar-widget.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [
            FilamentBuienradarWidgetCommand::class,
        ];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_filament-buienradar-widget_table',
        ];
    }
}
