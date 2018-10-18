<?php

namespace Artiden\Blacklist;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class BlackListServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('BlackList', function() {
            return new Manager;
        });
    }
}
