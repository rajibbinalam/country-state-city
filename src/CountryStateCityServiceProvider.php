<?php

namespace rajib\LaravelCountryStateCity;

use Illuminate\Support\ServiceProvider;

class CountryStateCityServiceProvider extends ServiceProvider
{

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
            'config' => [
                "$basePath/config/CountryStateCity.php" => config_path('CountryStateCity.php'),
            ],
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
