<?php

namespace rajib\LaravelCountryStateCity;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;
use VendorName\Skeleton\Commands\SkeletonCommand;

class CountryStateCityServiceProvider extends ServiceProvider
{
    // public function configurePackage(Package $package): void
    // {
    //     /*
    //      * This class is a Package Service Provider
    //      *
    //      * More info: https://github.com/spatie/laravel-package-tools
    //      */
    //     $package
    //         ->name('skeleton')
    //         ->hasConfigFile()
    //         ->hasViews()
    //         ->hasMigration('create_skeleton_table')
    //         ->hasCommand(SkeletonCommand::class);
    // }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('Country-State-City', function ($app) {
            return new \Rajib\LaravelCountryStateCity\CountryStateCity();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->registerPublishes();
    }

    private function registerPublishes()
    {
        $basePath = dirname(__DIR__);

        $arrPublshers = [
            'migrations' => [
                "$basePath/database/migrations" => database_path('migrations'),
            ],
            'seeders' => [
                "$basePath/database/seeders" => database_path('seeders'),
            ],
        ];

        foreach ($arrPublshers as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }
}
