<?php

namespace App\Providers;

use App\Contracts\TemperatureServiceInterface;
use App\Services\TemperatureService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TemperatureServiceInterface::class, TemperatureService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
