<?php

namespace App\Providers;

use App\Services\GalleryService;
use Illuminate\Support\ServiceProvider;

class GaleryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
           $this->app->singleton(GalleryService::class, function ($app) {
            return new GalleryService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
