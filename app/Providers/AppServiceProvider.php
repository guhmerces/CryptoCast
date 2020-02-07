<?php

namespace App\Providers;

use App\Podcast;
use App\Observers\PodcastObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Podcast::observe(PodcastObserver::class);
    }
}
