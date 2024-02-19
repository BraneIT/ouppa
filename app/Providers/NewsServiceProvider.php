<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\NewsService;

class NewsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
          $this->app->singleton(NewsService::class, function ($app) {
            return new NewsService();
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
