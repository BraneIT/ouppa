<?php

namespace App\Providers;

use App\Models\Erasmus;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         View::composer('frontend_views.layout.layout', function ($view) {
            $erasmus = Erasmus::select('name', 'slug')->get();
            $view->with('erasmus', $erasmus);
        });
    }
}
