<?php

namespace App\Providers;

use App\Contracts\FacebookDetector;
use App\Services\FacebookCrawlerDetector;
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
        $this->app->singleton(FacebookDetector::class, function () {
            return new FacebookCrawlerDetector(
                file(base_path('facebook-crawler.txt'), FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES)
            );
        });
    }
}
