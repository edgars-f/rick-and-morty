<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\RickAndMortyService;

class RickAndMortyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RickAndMortyService::class, function ($app) {
            return new RickAndMortyService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

